<?php 
    # Layout utilisé pour la vue
    $this->layout('debug');
    
    $this->start('debug');
    
        debug($articles);
        
    $this->stop('debug');
?>