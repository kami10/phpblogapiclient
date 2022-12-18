<?php

namespace App\Handler;

class Home
{
    private ApiClient $apiClient;
    private TemplateRenderer $templateRenderer;

    public function __construct(ApiClient $apiClient, TemplateRenderer $templateRenderer)
    {
        $this->apiClient = $apiClient;
        $this->templateRenderer = $templateRenderer;
    }

    public function handle()
    {
        $viewVariable = [];

        //Api getOne
        $response = $this->apiClient->get('http://localhost/api?id=34');
        $status = $response->getStatusCode();
        $output = json_decode($response->getBody()->getContents());
        $viewVariable = [
            'status' => $status,
            'output' => $output,
        ];

//        Api getAll
//        $response = $this->apiClient->get('http://localhost/api');
//        $allNews = json_decode($response->getBody()->getContents(), true);
//        $viewVariable = [
//            'news' => $allNews,
//        ];
//        $status = $response->getStatusCode();
//        $output = $response->getBody();
//        $viewVariable = [
//            'status' => $status,
//            'output' => $output,
//        ];

        //in ro tu site mige vali inja javab nemide chon bejaye body form_param mifrestim ounvar nemifahme
//        $response = $this->apiClient->request('POST', 'http://localhost/api', [
//            'form_params' => [
//                'title' => 'avauuuu',
//                'shortNews' => 'ajabaaaa',
//                'longNews' => 'dorostshod'
//            ]
//        ]);
//        $status = $response->getStatusCode();
//        $output = $response->getBody();
//        $viewVariable = [
//            'status' => $status,
//            'output' => $output,
//        ];

        //Api post
//        $response = $this->apiClient->post('http://localhost/api', [
//            'body' => json_encode([
//                'title' => 'avauuuu',
//                'shortNews' => 'ajabaaaa',
//                'longNews' => 'dorostshod',
//            ])
//        ]);
//        $status = $response->getStatusCode();
//        $output = $response->getBody();
//        $viewVariable = [
//            'status' => $status,
//            'output' => $output,
//        ];

        //Api delete
//        $response = $this->apiClient->delete('http://localhost/api?id=31');
//        $status = $response->getStatusCode();
//        $output = $response->getBody();
//        $viewVariable = [
//            'status' => $status,
//            'output' => $output,
//        ];

        //Api update
//        $response = $this->apiClient->put('http://localhost/api?id=34', [
//            'json' => [
//                "title" => "upda",
//                "shortNews" => "miko",
//                "longNews" => "man"
//            ]
//        ]);
//        $status = $response->getStatusCode();
//        $output = $response->getBody();
//        $viewVariable = [
//            'status' => $status,
//            'output' => $output,
//        ];

        return $this->templateRenderer->render('home.php', $viewVariable);
    }
}