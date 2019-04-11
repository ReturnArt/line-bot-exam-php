<?php



require "../vendor/autoload.php";

$access_token = 'Kes8azacx5hMOHZTM17UIwqgAxln4Yx/pPTdlMVhPSSdZqI6D8lgWkrmIkab88E87iwsEo2nj2XqrSIUe1MY27tuO8VIzgHpVK7KFnga34JGXUkRlN8+8lNxPVSC8pvs7PYU4pkG7HLqhyC0ohAcnwdB04t89/1O/w1cDnyilFU=';

$channelSecret = '256b5ce16f6cd3331469c4acd005b309';

$pushID = 'U8af1fc926817b0bf74f8b4c2167637a9';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

// text
// $messageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('test text1', 'test text2');
// $response = $bot->pushMessage($pushID, $messageBuilder);
// echo "text : ".$response->getHTTPStatus() . ' ' . $response->getRawBody();

// image
// $messageBuilder = new \LINE\LINEBot\MessageBuilder\ImageMessageBuilder('https://scdn.line-apps.com/n/channel_devcenter/img/fx/01_1_cafe.png');
// $response = $bot->pushMessage($pushID, $messageBuilder);
// echo "image : ".$response->getHTTPStatus() . ' ' . $response->getRawBody();

// sticker
// $messageBuilder = new \LINE\LINEBot\MessageBuilder\StickerMessageBuilder('1', '2');
// $response = $bot->pushMessage($pushID, $messageBuilder);
// echo "sticker : ".$response->getHTTPStatus() . ' ' . $response->getRawBody();

$messageBuilder = new \LINE\LINEBot\MessageBuilder\RawMessageBuilder(
    [
        'type' => 'flex',
        'altText' => 'Shopping',
        'contents' => [
            'type' => 'carousel',
            'contents' => [
                [
                    'type' => 'bubble',
                    'hero' => [
                        'type' => 'image',
                        'size' => 'full',
                        'aspectRatio' => '20:13',
                        'aspectMode' => 'cover',
                        'url' => 'https://scdn.line-apps.com/n/channel_devcenter/img/fx/01_1_cafe.png'
                    ],
                    'body' => [
                        'type' => 'box',
                        'layout' => 'vertical',
                        'spacing' => 'sm',
                        'contents' => [
                            [
                                'type' => 'text',
                                'text' => 'Arm Chair, White',
                                'wrap' => true,
                                'weight' => 'bold',
                                'size' => 'xl'
                            ],
                            [
                                'type' => 'box',
                                'layout' => 'baseline',
                                'contents' => [
                                    [
                                        'type' => 'text',
                                        'text' => '$49',
                                        'wrap' => true,
                                        'weight' => 'bold',
                                        'size' => 'xl',
                                        'flex' => 0
                                    ],
                                    [
                                        'type' => 'text',
                                        'text' => '.99',
                                        'wrap' => true,
                                        'weight' => 'bold',
                                        'size' => 'sm',
                                        'flex' => 0
                                    ]
                                ]
                            ]
                        ]
                    ],
                    'footer' => [
                        'type' => 'box',
                        'layout' => 'vertical',
                        'spacing' => 'sm',
                        'contents' => [
                            [
                                'type' => 'button',
                                'style' => 'primary',
                                'action' => [
                                    'type' => 'uri',
                                    'label' => 'Add to Cart',
                                    'uri' => 'line://app/1561476967-r9NAyk1p'
                                ]
                            ],
                            [
                                'type' => 'button',
                                'action' => [
                                    'type' => 'uri',
                                    'label' => 'Add to wishlist',
                                    'uri' => 'line://app/1561476967-r9NAyk1p'
                                ]
                            ]
                        ]
                    ]
                ],
                [
                    'type' => 'bubble',
                    'hero' => [
                        'type' => 'image',
                        'size' => 'full',
                        'aspectRatio' => '20:13',
                        'aspectMode' => 'cover',
                        'url' => 'https://scdn.line-apps.com/n/channel_devcenter/img/fx/01_1_cafe.png'
                    ],
                    'body' => [
                        'type' => 'box',
                        'layout' => 'vertical',
                        'spacing' => 'sm',
                        'contents' => [
                            [
                                'type' => 'text',
                                'text' => 'Metal Desk Lamp',
                                'wrap' => true,
                                'weight' => 'bold',
                                'size' => 'xl'
                            ],
                            [
                                'type' => 'box',
                                'layout' => 'baseline',
                                'contents' => [
                                    [
                                        'type' => 'text',
                                        'text' => '$11',
                                        'wrap' => true,
                                        'weight' => 'bold',
                                        'size' => 'xl',
                                        'flex' => 0
                                    ],
                                    [
                                        'type' => 'text',
                                        'text' => '.99',
                                        'wrap' => true,
                                        'weight' => 'bold',
                                        'size' => 'sm',
                                        'flex' => 0
                                    ]
                                ]
                            ],
                            [
                                'type' => 'text',
                                'text' => 'Temporarily out of stock',
                                'wrap' => true,
                                'size' => 'xxs',
                                'margin' => 'md',
                                'color' => '#ff5551',
                                'flex' => 0
                            ]
                        ]
                    ],
                    'footer' => [
                        'type' => 'box',
                        'layout' => 'vertical',
                        'spacing' => 'sm',
                        'contents' => [
                            [
                                'type' => 'button',
                                'style' => 'primary',
                                'color' => '#aaaaaa',
                                'action' => [
                                    'type' => 'uri',
                                    'label' => 'Add to Cart',
                                    'uri' => 'line://app/1561476967-r9NAyk1p'
                                ]
                            ],
                            [
                                'type' => 'button',
                                'action' => [
                                    'type' => 'uri',
                                    'label' => 'Add to wishlist',
                                    'uri' => 'line://app/1561476967-r9NAyk1p'
                                ]
                            ]
                        ]
                    ]
                ],
                [
                    'type' => 'bubble',
                    'body' => [
                        'type' => 'box',
                        'layout' => 'vertical',
                        'spacing' => 'sm',
                        'contents' => [
                            [
                                'type' => 'button',
                                'flex' => 1,
                                'gravity' => 'center',
                                'action' => [
                                    'type' => 'uri',
                                    'label' => 'See more',
                                    'uri' => 'line://app/1561476967-r9NAyk1p'
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
);
$response = $bot->pushMessage($pushID, $messageBuilder);
echo "flex : ".$response->getHTTPStatus() . ' ' . $response->getRawBody();
