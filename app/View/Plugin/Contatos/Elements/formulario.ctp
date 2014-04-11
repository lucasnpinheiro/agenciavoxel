<?php
echo $this->Session->flash();
echo $this->Form->create('Contatos.Contato', array('url' => '/contatos/contatos/enviar', 'type' => 'file', 'class' => 'formulario'));

echo $this->Form->input('Contato.redirect', array('type' => 'hidden', 'value' => '/#contato'));
echo $this->Form->input('Contato.status', array('type' => 'hidden', 'value' => 1));
echo $this->Form->input('Contato.not_captcha', array('type' => 'hidden', 'value' => 1));

echo $this->Form->input('Contato.nome', array('type' => 'text', 'label' => false, 'placeholder' => '* Nome', 'class' => 'col-xs-12', 'required' => true, 'div' => array('class' => 'col-xs-12 col-sm-6')));
echo $this->Form->input('Contato.empresa', array('type' => 'text', 'label' => false, 'placeholder' => 'Empresa', 'class' => 'col-xs-12', 'div' => array('class' => 'col-xs-12 col-sm-6')));
echo $this->Form->input('Contato.telefone', array('type' => 'text', 'label' => false, 'placeholder' => 'Telefone', 'class' => 'col-xs-12', 'div' => array('class' => 'col-xs-12 col-sm-6')));
echo $this->Form->input('Contato.email', array('type' => 'text', 'label' => false, 'placeholder' => '* E-mail', 'class' => 'col-xs-12', 'required' => true, 'div' => array('class' => 'col-xs-12 col-sm-6')));
echo $this->Form->input('Contato.website', array('type' => 'text', 'label' => false, 'placeholder' => 'Website', 'class' => 'col-xs-12', 'div' => array('class' => 'col-xs-12 col-sm-6')));
echo $this->Form->input('Contato.assunto', array('type' => 'text', 'label' => false, 'placeholder' => '* Assunto', 'class' => 'col-xs-12', 'required' => true, 'div' => array('class' => 'col-xs-12 col-sm-6')));
echo $this->Form->input('Contato.mensagem', array('type' => 'textarea', 'label' => false, 'placeholder' => '* Mensagem', 'class' => 'col-xs-12', 'required' => true, 'div' => array('class' => 'col-xs-12 col-sm-12')));
echo '<div class="col-xs-12" style="text-align: right;">' . $this->Form->button('Enviar') . '</div>';
echo $this->Form->end();
?>
