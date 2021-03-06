<?php 

    function renderNode($node,$route,$active) {
     
      $html = '<ul>'; 
      // check if it last child
      if( $node->isLeaf() ) {
        // check last child and is root
        if($node->isRoot()){
          $html .= '<li class="parent_li '. (strtolower($active)==strtolower($node->slug) ?"d-collape" :"").'"><span class="parent_root"><i class="fa fa-folder-open icongreen"></i> '.ucfirst($node->slug).'</span></li>';
        }else{
          // default last child of parent
          $html .= '<li class="child_li" style="display: none;"><a href="'.$route.'/'.$node->slug.'"><span class="child_root">'.ucfirst($node->slug).' <i class="fa fa-leaf icongreen"></i></span></a></li>';
        }
      } else { 
        // is root and have child
        if($node->isRoot()){
          $html .= '<li class="parent_li '. (strtolower($active)==strtolower($node->slug) ?"d-collape" :"").'"><span class="parent_root"><i class="fa fa-folder-open icongreen"></i> '.ucfirst($node->slug).'</span>';
        }else{
          $html .= '<li class="child_li" style="display: none;"><span class="child_root"><i class="fa fa-minus-square icongreen"></i>'.ucfirst($node->slug).'</span>';
        } 
        // loop recusive function get all child
        foreach($node->children as $child)
          $html .= renderNode($child,$route,$active);
        $html .= '</li>';
      } 
      $html .= '</ul>'; 
      return $html;
    }
    function profile(){
        $avatar=null;
        if(null !== auth()->user()->profile){
          $media = auth()->user()->profile->getMedia(); 
          foreach($media as $val){   
              if(auth()->user()->profile->avatar == $val->id){
                  $avatar=Storage::disk('dospace')->url($val->id.'/'.$val->file_name);  
              }
          } 
        }
        return $avatar;
    }
    function getDiscount($p,$d){
      if($d!='' && is_numeric($d)){ 
        return str_limit($p - ($p * ($d / 100)),8);
      }
      return str_limit($p,8);
    }