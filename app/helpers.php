<?php 

    function renderNode($node,$route) {
      $html = '<ul>'; 
      if( $node->isLeaf() ) {
        if($node->isRoot()){
          $html .= '<li class="parent_li"><span class="parent_root"><i class="fa fa-folder-open icongreen"></i> '.ucfirst($node->name).'</span></li>';
        }else{
          $html .= '<li class="child_li"><span class="child_root">'.ucfirst($node->name).' <i class="fa fa-leaf icongreen"></i></span></li>';
        }
      } else {
        if($node->isRoot()){
          $html .= '<li class="parent_li"><span class="parent_root"><i class="fa fa-folder-open icongreen"></i> '.ucfirst($node->name).'</span>';
        }else{
          $html .= '<li class="child_li"><span class="child_root"><i class="fa fa-minus-square icongreen"></i> '.ucfirst($node->name).'</span>';
        } 
        foreach($node->children as $child)
          $html .= renderNode($child,$route);
        $html .= '</li>';
      } 
      $html .= '</ul>'; 
      return $html;
    }