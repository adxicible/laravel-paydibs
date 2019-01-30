<?php

namespace Paydibs;

class Paydibs
{
    private $curl;

    public function __construct()
    {
        $this->curl = curl_init();
    }

    public function Pay(PayRequest $request)
    {
        $request->url = sprintf("%s?%s", $request->url, http_build_query($request->getData()));

        curl_setopt($this->curl, CURLOPT_URL, $request->url);
        
        $data = @curl_exec($this->curl);

        curl_close($this->curl);

        return $data;
    }

}
