<?php namespace BookList\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use BookList\Form\BookForm;

class BookController extends AbstractActionController {

    /**
     * Show all books.
     *
     * @return ViewModel
     */
    public function indexAction()
    {
        return new ViewModel([
            'books' => []
        ]);
    }

    /**
     * Add a book.
     *
     * @return array
     */
    public function addAction() {
        $form = new BookForm;
        $form->get('submit')->setValue('Add');

        $request = $this->getRequest();
        if ($request->isPost()) {

        }

        return ['form' => $form];
    }

    /**
     * Edit a book.
     *
     * @return array
     */
    public function editAction() {
        $form = new BookForm;
        //$form->bind($book);
        $form->get('submit')->setValue('Edit');

        $request = $this->getRequest();
        if ($request->isPost()) {

        }

        return [
            'id' => $id,
            'form' => $form
        ];
    }

    /**
     * Delete a book.
     *
     * @return array|\Zend\Http\Response
     */
    public function deleteAction() {
        $id = (int) $this->params()->fromRoute('id', 0);
        if (!$id) {
            return $this->redirect()->toRoute('book');
        }

        $request = $this->getRequest();
        if ($request->isPost()) {

        }

        return [
            'id' => $id,
            'book' => 0,
        ];
    }
}

