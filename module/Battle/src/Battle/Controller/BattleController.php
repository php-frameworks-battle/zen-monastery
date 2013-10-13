<?php
namespace Battle\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Battle\Form\ContactForm;

class BattleController extends AbstractActionController
{
    public function indexAction()
    {
    }

    public function contactAction()
    {
		$form = new ContactForm();

		// Get the data. In an MVC application, you might try:

		if ($this->getRequest()->isPost()) {
			$data = $this->getRequest()->getPost();  // for POST data

			$form->setData($data);
			// Validate the form
			if ($form->isValid()) {
			    $validatedData = $form->getData();
			} else {
			    $messages = $form->getMessages();
			}
		}
		return new ViewModel(array(
            'form' => $form,
        ));
    }
}