<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use function Symfony\Component\String\u;

class VinylController extends AbstractController
{
	#[Route('/')]
	public function homepage() : Response
	{

		$tracks = array("1" => "2", "3" => "4");

		return $this->render("vinyl/homepage.html.twig", [
			'title' => 'PB & Jams',
			'tracks' => $tracks,
		]);
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
