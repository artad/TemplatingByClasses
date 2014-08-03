<?php

abstract class View {
        
    /**
     * 
     * @param Closure $closure
     * @return type
     * @throws Exception
     */
    public function render(Closure $closure = null) {

        // Capture the view output
        ob_start();

        try {
            // Load the view within the current scope
            if($closure) {
                $closure();
            } else {
                $this->display();
            }
        } catch (Exception $e) {
            // Delete the output buffer
            ob_end_clean();

            // Re-throw the exception
            throw $e;
        }
        // Get the captured output and close the buffer
        return ob_get_clean();
    }
    
    /**
     * 
     */
    public function display() {
        $this->_display();
    }
    
    /**
     * 
     */
    abstract protected function _display();

}
