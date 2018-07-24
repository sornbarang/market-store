<?php 

    function renderNode($node,$route) {
      $html = '<ul>'; 
      if( $node->isLeaf() ) {
        $html .= '<li><a href="'.$route.'/'.$node->id.'"><span><i class="fa fa-leaf icongreen"></i> '.ucfirst($node->name).'</span></a></li>';
      } else {
        if($node->isRoot()){
          $html .= '<li><a href="'.$route.'/'.$node->id.'"><span class="parent_root"><i class="fa fa-folder-open-o icongreen"></i> '.ucfirst($node->name).'</span></a>';
        }else{
          $html .= '<li><a href="'.$route.'/'.$node->id.'"><span><i class="fa fa-minus-square-o icongreen"></i> '.ucfirst($node->name).'</span></a>';
        } 
        foreach($node->children as $child)
          $html .= renderNode($child,$route);
        $html .= '</li>';
      } 
      $html .= '</ul>'; 
      return $html;
    }