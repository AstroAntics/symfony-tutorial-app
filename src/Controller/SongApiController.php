<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class SongApiController extends AbstractController
{
	#[Route('/api/songs/{id<\d+>}', methods:['GET'])]
	public function getSong(int $id, LoggerInterface $li) : JsonResponse
	{
		// dd($id);

		// TODO query the database
		$song = [
			'id' => $id,
			'name' => 'Waterfalls',
			'url' => 'https://symfonycasts.s3.amazonaws.com/sample.mp3'
		];

		$li->info("Returning API response for song $id");

		return $this->json($song);
	}
}
