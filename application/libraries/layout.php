<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class Layout
{
    private $CI;
    private $var = array();
    /*
    |===============================================================================
    | Constructeur
    |===============================================================================
    */
    public function __construct()
    {
        
        $this->CI = &get_instance();
        $this->var['output'] = '';
        // Le titre est compos� du nom de la m�thode et du nom du contr�leur
        // La fonction ucfirst permet d'ajouter une majuscule
        $this->var['titre'] = ucfirst($this->CI->router->fetch_method()) . ' - ' .
            ucfirst($this->CI->router->fetch_class());
        // Nous initialisons la variable $charset avec la m�me valeur que
        // la cl� de configuration initialis�e dans le fichier config.php
        $this->var['charset'] = $this->CI->config->item('charset');
        $this->var['css'] = array();
        $this->var['js'] = array();
    }
    /*
    |===============================================================================
    | M�thodes pour charger les vues
    | . view
    | . views
    |===============================================================================
    */
    public function view($name, $data = array())
    {
        $this->var['output'] .= $this->CI->load->view($name, $data, true);
        $this->CI->load->view('../themes/default', $this->var);
    }

    public function views($name, $data = array())
    {
        $this->var['output'] .= $this->CI->load->view($name, $data, true);
        return $this;
    }

    public function set_titre($titre)
    {
        if (is_string($titre) and !empty($titre)) {
            $this->var['titre'] = $titre;
            return true;
        }
        return false;
    }

    public function set_page_name($page_name)
    {
        if (is_string($page_name) and !empty($page_name)) {
            $this->var['page_name'] = $page_name;
            return true;
        }
        return false;
    }

    public function set_data($data)
    {
        if (is_array($data) and !empty($data)) {
            $this->var['data'] = $data;
            return true;
        }
        return false;
    }

    public function set_charset($charset)
    {
        if (is_string($charset) and !empty($charset)) {
            $this->var['charset'] = $charset;
            return true;
        }
        return false;
    }
    public function ajouter_css($nom)
    {
        if (is_string($nom) and !empty($nom) and file_exists('./assets/css/'.$nom.'.css')) {
            $this->var['css'][] = css_url($nom);
            return true;
        }
        return false;
    }
    public function ajouter_js($nom)
    {
        if (is_string($nom) and !empty($nom) and file_exists('./assets/js/'.$nom.'.js')) {
            $this->var['js'][] = js_url($nom);
            return true;
        }
        return false;
    }
}
