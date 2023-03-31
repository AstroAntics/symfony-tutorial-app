<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use function Symfony\Component\String\u;

class VinylController 
{
	#[Route('/')]
	public function homepage() : Response
	{
		return new Response("NOT a frisbee!");
	}

	#[Route('/browse')]
	public function generalBrowse() : Response
	{
		return new Response("Check out the best songs!");
	}

	#[Route('/browse/{genre}')]
	public function browse(string $genre = null) : Response
	{
		$title = u(str_replace('-', " ", $genre))->title(true);
		return new Response("Check out the best $title songs!");
	}
}
