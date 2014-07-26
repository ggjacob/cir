<?php 

if (! defined('BASEPATH')) exit('No direct script access');

class Pagina_model extends CI_Model {

	//php 5 constructor
	function __construct() {
		parent::__construct();
	}
	
	
	function get_tratamento($id) {
		$this->db->where('id',$id);
		$query = $this->db->get('tb_paginas');
		return $query->result();	
	}
        
        //Assuntos Relacionados
         function listar_relacionados($id) {
		$this->db->where('id_pagina',$id);
                $this->db->join('tb_relacionados_paginas','tb_relacionados_paginas.id_link = tb_links_relacionados.id_relacionado');
		$query = $this->db->get('tb_links_relacionados');
		return $query->result();	
	}
        
         function listar_destaques($id) {
		$this->db->limit(3);
             	$query = $this->db->get('tb_destaques_tratamento');
		return $query->result();	
	}
        
         function listar_equipe($id) {
		$this->db->where('id_pagina',$id);
                $this->db->join('tb_equipe_paginas','tb_equipe_paginas.id_equipe = tb_equipe.id');
                $this->db->order_by('priority');
                $this->db->limit('5');
		$query = $this->db->get('tb_equipe');
		return $query->result();	
	}
        
        
        function info_tratamento($pagina) {
		$this->db->where('url',$pagina);
		$query = $this->db->get('tb_paginas');
		return $query->result();	
	}
	
	
	function get_tratamento_categoria($url) {
		$this->db->where('url',$url);
		$query = $this->db->get('tb_paginas');
		return $query->result();	
	}
		
	
	function get_sidebar($id) {
		$ids = explode("-",$id);	
		$sql="";
		$num=count($ids);
		$contador=0;
		foreach($ids as $id){
			$contador++;
			$sql.="video_id = ".$id;
			if($contador!=$num){
				$sql.=" OR ";
			}
			
		}		
		$this->db->where($sql);
		$this->db->order_by('id','desc');
		$query = $this->db->get_where('tb_paginas');
		return $query->result();
	}
	
	function listar_tratamentos() {
		$this->db->where('status',1);
                $this->db->where('status_menu',1);
                
		$query = $this->db->get('tb_paginas');
		return $query->result();	
	}
	
	function get_tratamentos($categoria) {
		$this->db->where('categoria',$categoria);
                 $this->db->where('status',1);
                $this->db->order_by('sequencia','desc');
		$query = $this->db->get('tb_paginas');
		return $query->result();	
	}
	
	function get_posts($categoria) {
		$this->db->where('id_categoria',$categoria);
		$this->db->where('data_agendada <=', date('Y-m-d'));
		$this->db->order_by('id','desc');
		$query = $this->db->get('blog_post');
		return $query->result();	
	}
	
	function get_post($url) {
		$this->db->where('url',$url);
		$query = $this->db->get('blog_post');
		return $query->result();	
	}
	
	function get_all_tratamentos() {
		$this->db->order_by('nome','ASC');
		$query = $this->db->get('tb_paginas');
		return $query->result();	
	}
	
	function get_video($categoria) {
		$this->db->where('categoria',$categoria);
		$query = $this->db->get('tb_paginas');
		return $query->result();	
	}
	

	function get_videos_tratamentos() {
		$this->db->where('url !=','');
		$query = $this->db->get('tb_videos');
		return $query->result();	
	}
          
        function estrutura() {
                $this->db->order_by('id','ASC');
		$query = $this->db->get('tb_estrutura');
		return $query->result();	
	}
        
        function listar_tratamentos_menu() {
		$this->db->where('status_menu',1);
		$this->db->order_by('ordem','asc');
		$query = $this->db->get('tb_paginas');
		return $query->result();	
	}
        
        
        function get_videos_saibamais() {
		$this->db->where('id >=','52');
		$query = $this->db->get('tb_videos');
		return $query->result();	
	}
	
	 function get_relacionados($relacionados) {
		$this->db->where_in('id', $relacionados);
		$query = $this->db->get('tb_relacionados');
		return $query->result();	
	}
	
	
	
	
	function insert_video($data) {
		$this->db->insert('tb_paginas',$data);
	}	
	

	function post_relacionados($categoria,$limit) {
            $query = $this->db->query("
               SELECT                
                    posts.id, 
                    posts.post_title,
                    posts.post_date,
                    posts.post_name,
                    posts.post_content,
                    attachments.guid AS meta_value, 
                    terms.slug              
               FROM
                  wp_posts posts
                  INNER JOIN wp_posts attachments ON posts.ID = attachments.post_parent
                  INNER JOIN wp_postmeta files ON attachments.ID = files.post_id
                  INNER JOIN wp_term_relationships relationships ON posts.ID = relationships.object_id  
                  INNER JOIN wp_term_taxonomy taxonomy ON  relationships.term_taxonomy_id  =   taxonomy.term_taxonomy_id
                  INNER JOIN wp_terms terms  ON taxonomy.term_id = terms.term_id  
                WHERE 1 = 1
                  AND files.meta_key = '_wp_attached_file'
                  AND posts.post_status = 'publish'
                  AND terms.slug = '$categoria'
                GROUP BY posts.ID
                ORDER BY`posts`.`post_date` ASC
                LIMIT $limit;
            ");
            return $query->result();            
	}
	
	
	function post_categoria($categoria,$limit) {
            $query = $this->db->query("
                SELECT                
                    posts.id, 
                    posts.post_title,
                    posts.post_date,
                    posts.post_name,
                    posts.post_content,
                    attachments.guid AS meta_value, 
                    terms.slug              
               FROM
                  wp_posts posts
                  INNER JOIN wp_posts attachments ON posts.ID = attachments.post_parent
                  INNER JOIN wp_postmeta files ON attachments.ID = files.post_id
                  INNER JOIN wp_term_relationships relationships ON posts.ID = relationships.object_id  
                  INNER JOIN wp_term_taxonomy taxonomy ON  relationships.term_taxonomy_id  =   taxonomy.term_taxonomy_id
                  INNER JOIN wp_terms terms  ON taxonomy.term_id = terms.term_id  
                WHERE 1 = 1
                  AND files.meta_key = '_wp_attached_file'
                  AND posts.post_status = 'publish'
                  AND terms.slug = '$categoria'
                GROUP BY posts.ID
                ORDER BY`posts`.`post_date` DESC
                LIMIT $limit;
            ");
            return $query->result();
	}
	
        
        
        function post_ultimos($limit,$date_post) {
   
            $query = $this->db->query("
      
                SELECT                
                    posts.id, 
                    posts.post_title,
                    posts.post_date,
                    posts.post_name,
                    posts.post_content,
                    attachments.guid AS meta_value, 
                    terms.slug              
               FROM
                  wp_posts posts
                  INNER JOIN wp_posts attachments ON posts.ID = attachments.post_parent
                  INNER JOIN wp_postmeta files ON attachments.ID = files.post_id
                  INNER JOIN wp_term_relationships relationships ON posts.ID = relationships.object_id  
                  INNER JOIN wp_term_taxonomy taxonomy ON  relationships.term_taxonomy_id  =   taxonomy.term_taxonomy_id
                  INNER JOIN wp_terms terms  ON taxonomy.term_id = terms.term_id  
                WHERE 1 = 1
                  AND files.meta_key = '_wp_attached_file'
                  AND posts.post_status = 'publish'
                  AND posts.post_date < '$date_post'
                GROUP BY posts.ID
                ORDER BY`posts`.`post_date` DESC
                LIMIT $limit;
            ");
            
            return $query->result();
	}	
   
	
        function post_penultimo($categoria,$limit,$date_post) {
   
            $query = $this->db->query("
      
                SELECT                
                    posts.id, 
                    posts.post_title,
                    posts.post_date,
                    posts.post_name,
                    posts.post_content,
                    attachments.guid AS meta_value, 
                    terms.slug              
               FROM
                  wp_posts posts
                  INNER JOIN wp_posts attachments ON posts.ID = attachments.post_parent
                  INNER JOIN wp_postmeta files ON attachments.ID = files.post_id
                  INNER JOIN wp_term_relationships relationships ON posts.ID = relationships.object_id  
                  INNER JOIN wp_term_taxonomy taxonomy ON  relationships.term_taxonomy_id  =   taxonomy.term_taxonomy_id
                  INNER JOIN wp_terms terms  ON taxonomy.term_id = terms.term_id  
                WHERE 1 = 1
                  AND files.meta_key = '_wp_attached_file'
                  AND posts.post_status = 'publish'
                  AND terms.slug = '$categoria'
                  AND posts.post_date < '$date_post'
                GROUP BY posts.ID
                ORDER BY`posts`.`post_date` DESC
                LIMIT $limit;
            ");
            
            return $query->result();
            
	}	
}
?>