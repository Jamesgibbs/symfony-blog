<?php
namespace jamesBlogBundle\Controller;

use jamesBlogBundle\Entity\Task;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class DefaultController extends Controller
{


	public function indexAction()
    {
        return $this->render('jamesBlogBundle:Default:index.html.twig');
    }

    public function page2Action()
    {
        return $this->render('jamesBlogBundle:Default:page2.html.twig');
    }

    public function newAction(Request $request)
    {
        // create a task and give it some dummy data for this example
        $task = new Task();
        $task->setTask('Write a blog post');
        $task->setDueDate(new \DateTime('tomorrow'));

        $form = $this->createFormBuilder($task)
            ->add('task', TextType::class)
            ->add('dueDate', DateType::class)
            ->add('save', SubmitType::class, array('label' => 'Create Task'))
            ->getForm();

        return $this->render('jamesBlogBundle:Default:blog.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}