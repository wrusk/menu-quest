<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{

	private function _processRequest($currentURL, $currentRequest){
		$response_pkg = [];
		$current_command = $currentRequest->query->get('mqUserInput');
		$current_items = $currentRequest->query->get('mqHeldItems');
		$current_used_items = $currentRequest->query->get('mqUsedItems');
		$current_open_rooms = $currentRequest->query->get('mqOpenRooms');
		
		//Lets add room to the open room list if it isn't already there
		//N.B. string could match on 0 slot, so === is necessary for check
		if ($currentURL != '/' && strpos($current_open_rooms,substr($currentURL,1)) === false){
			//room was not already there lets add it. 
			$current_open_rooms = $current_open_rooms . ' ' . substr($currentURL,1);
			if (strpos($current_open_rooms,' ') === 0){
				$current_open_rooms = substr($current_open_rooms,1);
			}
		}
		
		$response_pkg['mqHeldItems'] = $current_items;
		$response_pkg['mqUsedItems'] = $current_used_items;
		$response_pkg['mqOpenRooms'] = $current_open_rooms;
		$response_pkg['command'] = strtolower($current_command);
		
		return $response_pkg;
	}	

    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
    	//first lets figure out the response package
    	$response_pkg = $this->_processRequest('/', $request);
    
    	// The east exit corresponds with About Me
    	if ($response_pkg['command'] == 'go east' || $response_pkg['command'] == 'east' ){
			return $this->redirect('/about?mqOpenRooms=' . $response_pkg['mqOpenRooms']); 
    	}
    	
        // reload the current page
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
            'response_pkg' => $response_pkg,
        ]);
    }
    
    /**
     * @Route("/about", name="about")
     */
    public function aboutAction(Request $request)
    {
    	//first lets figure out the response package
    	$response_pkg = $this->_processRequest('/about', $request);
    	
    	// The east exit corresponds with April Fools
    	if ($response_pkg['command'] == 'go east' || $response_pkg['command'] == 'east' ){
			return $this->redirect('/april-fools?mqOpenRooms=' . $response_pkg['mqOpenRooms']);
    	}    	

    	// The west exit corresponds with Homepage
    	if ($response_pkg['command'] == 'go west' || $response_pkg['command'] == 'west' ){
			return $this->redirect('/?mqOpenRooms=' . $response_pkg['mqOpenRooms'] );   	
    	}    	
			
        // replace this example code with whatever you need
        return $this->render('default/about.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
            'response_pkg' => $response_pkg,
        ]);
    }

    /**
     * @Route("/april-fools", name="aprilfools")
     */
    public function aprilFoolsAction(Request $request)
    {
    	//first lets figure out the response package
    	$response_pkg = $this->_processRequest('/april-fools', $request);

    	// The east exit corresponds with Projects for now
    	if ($response_pkg['command'] == 'go east' || $response_pkg['command'] == 'east' ){
			return $this->redirect('/projects?mqOpenRooms=' . $response_pkg['mqOpenRooms']);
    	} 

    	// The west exit corresponds with About Me
    	if ($response_pkg['command'] == 'go west' || $response_pkg['command'] == 'west' ){
			return $this->redirect('/about?mqOpenRooms=' . $response_pkg['mqOpenRooms']);   	
    	}    	
    
        // replace this example code with whatever you need
        return $this->render('default/april-fools.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
            'response_pkg' => $response_pkg,
        ]);
    }

    /**
     * @Route("/user-interface", name="onUI")
     */
    public function uiAction(Request $request)
    {
    	//first lets figure out the response package
    	$response_pkg = $this->_processRequest('/user-interface', $request);
    
        // replace this example code with whatever you need
        return $this->render('default/user-interface.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
            'response_pkg' => $response_pkg,
        ]);
    }    

    /**
     * @Route("/tech-notes", name="technotes")
     */
    public function techNotesAction(Request $request)
    {
    	//first lets figure out the response package
    	$response_pkg = $this->_processRequest('/tech-notes', $request);
    
        // replace this example code with whatever you need
        return $this->render('default/tech-notes.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
            'response_pkg' => $response_pkg,
        ]);
    }

    /**
     * @Route("/hire-me", name="hireme")
     */
    public function hireAction(Request $request)
    {
    	//first lets figure out the response package
    	$response_pkg = $this->_processRequest('/hire-me', $request);
    
        // replace this example code with whatever you need
        return $this->render('default/hire-me.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
            'response_pkg' => $response_pkg,
        ]);
    }

    /**
     * @Route("/projects", name="otherprojects")
     */
    public function projectsAction(Request $request)
    {
    	//first lets figure out the response package
    	$response_pkg = $this->_processRequest('/projects', $request);
    	
    	// The west exit corresponds with April Fools for now
    	if ($response_pkg['command'] == 'go west' || $response_pkg['command'] == 'west' ){
			return $this->redirect('/april-fools?mqOpenRooms=' . $response_pkg['mqOpenRooms']);   	
    	}  
    
        // replace this example code with whatever you need
        return $this->render('default/projects.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
            'response_pkg' => $response_pkg,
        ]);
    }    
            
}
