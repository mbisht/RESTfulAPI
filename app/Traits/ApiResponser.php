<?php

namespace App\Traits;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;

trait ApiResponser
{
	private function successResponse($data, $code)
	{
		return response()->json($data, $code);
	}

	protected function errorResponse($message, $code)
	{
		return response()->json(['error' => $message, 'code' => $code], $code);
	}

	protected function showAll(Collection $Collection, $code = 200)
	{
		//echo "one";
		//exit();
		return $this->successResponse(['data' => $Collection], $code);
		//echo "two";
	}
	//echo "three";

	protected function showOne(Model $model, $code = 200)
	{
		return $this->successResponse(['data' => $model], $code);
	}

}
