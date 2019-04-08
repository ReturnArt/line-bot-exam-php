<?php



require "vendor/autoload.php";

$access_token = 'Kes8azacx5hMOHZTM17UIwqgAxln4Yx/pPTdlMVhPSSdZqI6D8lgWkrmIkab88E87iwsEo2nj2XqrSIUe1MY27tuO8VIzgHpVK7KFnga34JGXUkRlN8+8lNxPVSC8pvs7PYU4pkG7HLqhyC0ohAcnwdB04t89/1O/w1cDnyilFU=';

$channelSecret = '256b5ce16f6cd3331469c4acd005b309';

$pushID = 'U8af1fc926817b0bf74f8b4c2167637a9';
// $pushID = 'U8af1fc926817b0bf74f8b4c2167637a9';


$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);
//
// // flex message
// $message = FlexMessageBuilder::builder()
//                 ->setAltText('test')
//                 ->setContents(
//                     BubbleContainerBuilder::builder()
//                     ->setHeader(
//                         BoxComponentBuilder::builder()
//                         ->setLayout(ComponentLayout::VERTICAL)
//                         ->setContents([
//                             TextComponentBuilder::builder()
//                                 ->setText('test')
//                                 ->setAlign(ComponentAlign::CENTER)
//                                 ->setWrap(true)
//                                 ->setWeight(ComponentFontWeight::BOLD)
//                                 ->setColor('#17c950'),
//                             TextComponentBuilder::builder()
//                                 ->setText('test')
//                                 ->setAlign(ComponentAlign::CENTER)
//                                 ->setWrap(true)
//                                 ->setWeight(ComponentFontWeight::BOLD)
//                                 ->setColor('#17c950'),
//                         ])
//                     )
//                     ->setHero(
//                         ImageComponentBuilder::builder()
//                         ->setSize(ComponentImageSize::FULL)
//                         ->setAspectRatio(ComponentImageAspectRatio::R20TO13)
//                         ->setAspectMode(ComponentImageAspectMode::COVER)
//                         ->setUrl('https://becatholic.ilhamriski.com/images/becatholic_top_banner.png')
//                     )
//                     ->setBody(
//                         BoxComponentBuilder::builder()
//                         ->setLayout(ComponentLayout::VERTICAL)
//                         ->setSpacing(ComponentSpacing::SM)
//                         ->setContents([
//                             TextComponentBuilder::builder()
//                                 ->setText('📢  test')
//                                 ->setWrap(true)
//                                 ->setWeight(ComponentFontWeight::BOLD)
//                                 ->setSize(ComponentFontSize::LG),
//                             SeparatorComponentBuilder::builder(),
//                             BoxComponentBuilder::builder()
//                                 ->setLayout(ComponentLayout::BASELINE)
//                                 ->setContents([
//                                     TextComponentBuilder::builder()
//                                         ->setText('test test testsetsetset')
//                                         ->setWrap(true)
//                                 ]),
//                             BoxComponentBuilder::builder()
//                                 ->setLayout(ComponentLayout::VERTICAL)
//                                 ->setMargin(ComponentMargin::XXL)
//                                 ->setContents([
//                                     SpacerComponentBuilder::builder(),
//                                     ImageComponentBuilder::builder()
//                                         ->setUrl('https://google.com/example.png')
//                                         ->setAspectMode(ComponentImageAspectMode::COVER)
//                                         ->setSize(ComponentImageSize::XL),
//                                     TextComponentBuilder::builder()
//                                         ->setText('Kamu bisa menambahkan via qrCode diatas, atau dengan menekan tombol Add Friends dibawah.')
//                                         ->setColor('#aaaaaa')
//                                         ->setWrap(true)
//                                         ->setMargin(ComponentMargin::XXL)
//                                         ->setSize(ComponentFontSize::XS)
//                                 ])
//                         ])
//                     )
//                     ->setFooter(
//                         BoxComponentBuilder::builder()
//                         ->setLayout(ComponentLayout::VERTICAL)
//                         ->setSpacing(ComponentSpacing::SM)
//                         ->setContents([
//                             ButtonComponentBuilder::builder()
//                                 ->setStyle(ComponentButtonStyle::PRIMARY)
//                                 ->setAction(
//                                     new UriTemplateActionBuilder('👍 Add Friends', 'https://google.com')
//                                 ),
//                             ButtonComponentBuilder::builder()
//                                 ->setStyle(ComponentButtonStyle::SECONDARY)
//                                 ->setAction(
//                                     new UriTemplateActionBuilder('🌐 Website', 'https://google.com')
//                             )
//                         ])
//                     )
//                 );
// $response = $bot->pushMessage($pushID, $message);

// $textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder($msg);
// $response = $bot->pushMessage($pushID, $textMessageBuilder);

// $textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('test text1', 'test text2', 'test text3');
// $response = $bot->pushMessage($pushID, $textMessageBuilder);

// $message_string = '{
//   "type": "button",
//   "action": {
//     "type": "uri",
//     "label": "Tap me",
//     "uri": "https://google.com"
//   },
//   "style": "primary",
//   "color": "#0000ff"
// }';
// $message_json = json_decode($message_string);

// $textMessageBuilder = new \LINE\LINEBot\MessageBuilder\FlexMessageBuilder();
// $textMessageBuilder.setAltText("flex message");
// $textMessageBuilder.setContents($message_string);
// $response = $bot->pushMessage($pushID, $textMessageBuilder);

// $textReplyMessage = new \LINE\LINEBot\MessageBuilder\Flex\BubbleContainerBuilder(
//   "ltr",NULL,NULL,
//   new \LINE\LINEBot\MessageBuilder\Flex\ComponentBuilder\BoxComponentBuilder("vertical cc",
//     array(
//       new \LINE\LINEBot\MessageBuilder\Flex\ComponentBuilder\TextComponentBuilder("hello"),
//       new \LINE\LINEBot\MessageBuilder\Flex\ComponentBuilder\TextComponentBuilder("world")
//     )
//   )
// );

// $textReplyMessage = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('test text1', 'test text2', 'test text3');
$textReplyMessage = new \LINE\LINEBot\MessageBuilder\ImageMessageBuilder('https://scdn.line-apps.com/n/channel_devcenter/img/fx/01_1_cafe.png');
$response = $bot->pushMessage($pushID, $textReplyMessage);

echo "check : ".$response->getHTTPStatus() . ' ' . $response->getRawBody();
