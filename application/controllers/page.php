<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Page extends Frontend_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('page_m');
    }

    public function index(){
//      dump('Page!');
        /*Change the routing to : $route[':any'] = 'page/index/$1';*/
        // dump($this->uri->segment(1));

        $this->data['page'] = $this->page_m->get_by(array('slug' => (string) $this->uri->segment(1)), TRUE);
        count($this->data['page']) || show_404(current_url());
        // echo '<pre>' . $this->db->last_query() . '</pre>';
        // dump($this->data['page']);

    /*If we have a template called - homepage, then it will call = $this->_homepage()*/
    $method = '_' .$this->data['page']->template;
    /*Lets check to see if the template exists*/
    if (method_exists($this, $method)) {
        // if method exists....
        $this->$method();
    }else{
        // If the method doesnt exists
        log_message('error', 'Could not load template: ' . $method . 'in file: ' . __FILE__ . 'at line: ' . __LINE__);
        show_error('Could not load template: ' . $method);
    }
        /*Load a view*/
        $this->data['subview'] = $this->data['page']->template;
        $this->data['content'] = $this->data['page']->body;
        // dump($this->data['subview']);
        $this->load->view('_main_layout', $this->data);

    }/*End of the index function*/



    /*WE need different data, for each template, therefore lets setup a method to access dynamic templates*/
    private function _page(){
        $this->data['recent_news'] = $this->article_m->get_recent();
//      dump("Welcome from the Page template");
    }

    private function _homepage(){
        /*Load the articles from the db*/
        $this->load->model('article_m');
        $this->db->where('pubdate <=', date('Y-m-d'));
        $this->db->limit(6);
        $this->data['articles'] = $this->article_m->get();
    }

    /*Setting a method for new_acrhive method*/
    private function _news_archive(){
  //    Count all articles
        $this->load->model('article_m');
        $this->data['recent_news'] = $this->article_m->get_recent();
        
        $this->db->where('pubdate <=', date('Y-m-d'));
        $count = $this->db->count_all_results('articles');
        // dump($count);
        // Set up a pagination method
        $perpage = 3;
        if($count > $perpage){


            $this->load->library('pagination');
            $config['base_url'] = site_url($this->uri->segment(1) . '/');
            $config['total_rows'] = $count;
            $config['per_page'] = $perpage;
            $config['uri_segment'] = 2;
            
            /* This Application Must Be Used With BootStrap 3 *  */
            $config['full_tag_open'] = "<ul class='pagination'>";
            $config['full_tag_close'] ="</ul>";
            $config['num_tag_open'] = '<li>';
            $config['num_tag_close'] = '</li>';
            $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
            $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
            $config['next_tag_open'] = "<li>";
            $config['next_tagl_close'] = "</li>";
            $config['prev_tag_open'] = "<li>";
            $config['prev_tagl_close'] = "</li>";
            $config['first_tag_open'] = "<li>";
            $config['first_tagl_close'] = "</li>";
            $config['last_tag_open'] = "<li>";
            $config['last_tagl_close'] = "</li>";
            
            
            
            /* Setting up the Pagination and Initializing */
            $this->pagination->initialize($config);
            $this->data['pagination'] = $this->pagination->create_links();
            $offset = $this->uri->segment(2);

        }else{
            $this->data['pagination'] = '';
            $offset = 0;
        }
        // Dump the pagination
        // echo $this->data['pagination'];
 
        // Fetch the articles
        $this->db->where('pubdate <=', date('Y-m-d'));
        $this->db->limit($perpage, $offset);
        $this->data['articles'] = $this->article_m->get();
//      dump(count($this->data['articles']));
//      echo '<pre>'. $this->db->last_query() . '</pre>';


    }/*End of the _news_archive function*/    
    
        
}/* End of file page.php */
/* Location: ./application/controllers/p age.php */