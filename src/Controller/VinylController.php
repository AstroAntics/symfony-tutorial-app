<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use function Symfony\Component\String\u;

class VinylController extends AbstractController
{
	#[Route('/', name:'app_homepage')]
	public function homepage() : Response
	{

		$tracks = [
			['song' => 'Gangsta Paradise', 'artist' => 'Coolio'],
			['song' => 'Waterfalls', 'artist' => 'TLC'],
			['song' => 'Creep', 'artist' => 'Radiohead'],
			['song' => 'Kiss from a Rose' , 'artist' => 'Seal'],
			['song' => 'Baby', 'artist' => 'Justin Bieber'],
			['song' => 'The Girl from Ipanema', 'artist' => '???'],
			['song' => 'Stairway to Heaven', 'artist' => 'Led Zeppelin'],
			['song' => 'Help!', 'artist' => 'The Beatles'],
			['song' => 'All You Need is Love', 'artist' => 'The Beatles']
		];

		return $this->render("vinyl/homepage.html.twig", [
			'title' => 'PB & Jams',
			'tracks' => $tracks,
		]);
	}

	/*
	#[Route('/browse')]
	public function generalBrowse() : Response
	{
		return new Response("Check out the best songs!");
	}
	*/

	#[Route('/browse/{genre}', name: 'app_browse')]
	public function browse(string $genre = null) : Response
	{
		$title = $genre ? u(str_replace('-', " ", $genre))->title(true) : null;
		return $this->render("vinyl/browse.html.twig", ['genre' => $title]); 
	}
}
