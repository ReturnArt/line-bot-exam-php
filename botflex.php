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

$message_string = '{
  "type": "bubble",
  "hero": {
    "type": "image",
    "url": "https://scdn.line-apps.com/n/channel_devcenter/img/fx/01_1_cafe.png",
    "size": "full",
    "aspectRatio": "20:13",
    "aspectMode": "cover",
    "action": {
      "type": "uri",
      "uri": "http://linecorp.com/"
    }
  },
  "body": {
    "type": "box",
    "layout": "vertical",
    "contents": [
      {
        "type": "text",
        "text": "Brown Cafe",
        "weight": "bold",
        "size": "xl"
      },
      {
        "type": "box",
        "layout": "baseline",
        "margin": "md",
        "contents": [
          {
            "type": "icon",
            "size": "sm",
            "url": "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gold_star_28.png"
          },
          {
            "type": "icon",
            "size": "sm",
            "url": "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gold_star_28.png"
          },
          {
            "type": "icon",
            "size": "sm",
            "url": "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gold_star_28.png"
          },
          {
            "type": "icon",
            "size": "sm",
            "url": "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gold_star_28.png"
          },
          {
            "type": "icon",
            "size": "sm",
            "url": "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gray_star_28.png"
          },
          {
            "type": "text",
            "text": "4.0",
            "size": "sm",
            "color": "#999999",
            "margin": "md",
            "flex": 0
          }
        ]
      },
      {
        "type": "box",
        "layout": "vertical",
        "margin": "lg",
        "spacing": "sm",
        "contents": [
          {
            "type": "box",
            "layout": "baseline",
            "spacing": "sm",
            "contents": [
              {
                "type": "text",
                "text": "Place",
                "color": "#aaaaaa",
                "size": "sm",
                "flex": 1
              },
              {
                "type": "text",
                "text": "Miraina Tower, 4-1-6 Shinjuku, Tokyo",
                "wrap": true,
                "color": "#666666",
                "size": "sm",
                "flex": 5
              }
            ]
          },
          {
            "type": "box",
            "layout": "baseline",
            "spacing": "sm",
            "contents": [
              {
                "type": "text",
                "text": "Time",
                "color": "#aaaaaa",
                "size": "sm",
                "flex": 1
              },
              {
                "type": "text",
                "text": "10:00 - 23:00",
                "wrap": true,
                "color": "#666666",
                "size": "sm",
                "flex": 5
              }
            ]
          }
        ]
      }
    ]
  },
  "footer": {
    "type": "box",
    "layout": "vertical",
    "spacing": "sm",
    "contents": [
      {
        "type": "button",
        "style": "link",
        "height": "sm",
        "action": {
          "type": "uri",
          "label": "CALL",
          "uri": "https://linecorp.com"
        }
      },
      {
        "type": "button",
        "style": "link",
        "height": "sm",
        "action": {
          "type": "uri",
          "label": "WEBSITE",
          "uri": "https://linecorp.com"
        }
      },
      {
        "type": "spacer",
        "size": "sm"
      }
    ],
    "flex": 0
  }
}';
$message_json = json_encode($message_string);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\MessageBuilder::buildMessage();
$response = $bot->pushMessage($pushID, $message_string);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
