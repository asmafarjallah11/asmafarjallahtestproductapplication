<?php

namespace AppBundle\Controller;
use AppBundle\Entity\Product;
use AppBundle\Form\ProductType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ProductController extends Controller
{
    /**
     * @Route("/", name="home")
     */
   
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('base.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
     /**
     * @Route("/AddProduct", name="ajouter produit")
     */
     public function addAction(Request $request)
    {
         $product = new Product();
         $form = $this->createForm(ProductType::class,$product);
         $form->handleRequest($request);
         if($form->isSubmitted() And  $form->isValid())
               {
                  $em = $this->getDoctrine()->getManager();
                  $em->persist($product);
                  $em->flush();
                 $responsemessage = " Votre produit est ajoute avec success. "    ;       
                 $htmlResp = $this->render('response.html.twig', array('message'=>$responsemessage));
                  $htmlResp->headers->set('Content-Type', 'text/html');
                  
                  //send mail 
              $to = 'asmafarjallahlabiadh@gmail.com';
              
              $subject = 'Nouveau produit insere';
              
              $headers = "From: " . strip_tags('asma@example.com') . "\r\n";
              $headers .= "Reply-To: ". strip_tags('asma@example.com') . "\r\n";
              $headers .=  "CC: asma@example.com\r\n";
              $headers .= "MIME-Version: 1.0\r\n";
              $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
              
              
              $message = '<html>
                      <body>';
              $message .=  "<p><strong> un nouveau produit est insere </strong></p> ";
              $message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
              $message .= "<tr ><td style='background: #eee;'><strong>Nom:</strong> </td><td>" . strip_tags($product->getNomproduit()) . "</td></tr>";
              $message .= "<tr><td style='background: #eee;'><strong>Prix:</strong> </td><td>" . strip_tags($product->getPrix()) . '$'."</td></tr>";
              $message .= "<tr><td style='background: #eee;'><strong>Description:</strong> </td><td>" . strip_tags($product->getDescription()) . "</td></tr>";
              $message .= "</table>";
              $message .= "</body></html>";
              
              
              if (mail($to, $subject, $message, $headers)) {
                  echo ' <div class="container">';
                  echo ' <div class="alert alert-info" role="alert">';
                  echo " <strong> Succes: </strong>Votre Message a ete envoye." . PHP_EOL;
                  echo  ' </div>';
                  echo  ' </div>';
          
              } else {
                  echo ' <div class="container">';
                  echo ' <div class="alert alert-danger" role="alert">';
                  echo 'There was a problem sending the email.';
                  echo  ' </div>';
                  echo  ' </div>';
              
              }
       /*  $message = \Swift_Message::newInstance()
        ->setSubject('Nouveau produit ajoute')
        ->setFrom('send@example.com')
        ->setTo('asmafarjallahlabiadh@gmail.com')
        ->setContentType ('text/html')            
        ->setBody(
            $this->renderView(
                // app/Resources/views/Emails/registration.html.twig
                'response.html.twig',
                array('nomproduit' => $product->getNomproduit(),
                      'prix' => $product->getPrix(),
                      'description' => $product->getDescription()
                      )
                    ));*/
               

           
              /*  if (!$this->get('mailer')->send($message, $errors))
                        {
                            echo "Error:";
                            print_r($errors);
                        }*/
                
                  
      
        return $htmlResp;
               }
         $formView = $form->createView();
           return $this->render('productAdd.html.twig',array('form'=>$formView));
    }
}
