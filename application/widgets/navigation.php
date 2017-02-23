<?php

/*
 * Demo widget
 */
class Navigation extends Widget {

    public function display($data) {
        
        if (!isset($data['items'])) {
            $data['items'] = array('PSSI', 'PIALA PRESIDEN 2017');
        }

        $this->view('widgets/navigation', $data);
    }
    
}