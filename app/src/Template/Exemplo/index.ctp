<h1>Exemplo</h1>

<?php

    echo $this->Form->create();
    
    echo $this->Form->input('Nome');
    
    echo $this->Form->button('Enviar');
    
    echo $this->Form->end();