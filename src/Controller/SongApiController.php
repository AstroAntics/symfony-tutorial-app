<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class SongApiController extends AbstractController
{
	#[Route('/api/songs/{id}')]
	public function getSong($id) : JsonResponse
	{
		// dd($id);

		// TODO query the database
		$song = [
			'id' => $id,
			'name' => 'Waterfalls',
			'url' => 'https://symfonycasts.s3.amazonaws.com/sample.mp3'
		];

		return $this->json($song);
	}
}
