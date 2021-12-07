<?php

use Illuminate\Http\Request;

interface PostInterface
{

    public function index();
    public function store(Request $request);
    public function show($id);
    public function destroy($id);

}
