<?php 

    function renderNode($node,$route) {
      $html = '<ul>'; 
      // check if it last child
      if( $node->isLeaf() ) {
        // check last child and is root
        if($node->isRoot()){
          $html .= '<li class="parent_li"><span class="parent_root"><i class="fa fa-folder-open icongreen"></i> '.ucfirst($node->name).'</span></li>';
        }else{
          // default last child of parent
          $html .= '<li class="child_li"><a href="'.$route.'/'.$node->slug.'"><span class="child_root">'.ucfirst($node->name).' <i class="fa fa-leaf icongreen"></i></span></a></li>';
        }
      } else {
        // is root and have child
        if($node->isRoot()){
          $html .= '<li class="parent_li"><span class="parent_root"><i class="fa fa-folder-open icongreen"></i> '.ucfirst($node->name).'</span>';
        }else{
          $html .= '<li class="child_li"><span class="child_root"><i class="fa fa-minus-square icongreen"></i> '.ucfirst($node->name).'</span>';
        } 
        // loop recusive function get all child
        foreach($node->children as $child)
          $html .= renderNode($child,$route);
        $html .= '</li>';
      } 
      $html .= '</ul>'; 
      return $html;
    }