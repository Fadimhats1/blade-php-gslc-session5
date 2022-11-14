<?php

namespace App\Models;

class Manga
{

    private static $mangaList= [
        [
            "images" => [
                "jpg" => [
                    "image_url" => "https://cdn.myanimelist.net/images/manga/1/157897.jpg",
                    "small_image_url" => "https://cdn.myanimelist.net/images/manga/1/157897t.jpg",
                    "large_image_url" => "https://cdn.myanimelist.net/images/manga/1/157897l.jpg"
                ],
                "webp" => [
                    "image_url" => "https://cdn.myanimelist.net/images/manga/1/157897.webp",
                    "small_image_url" => "https://cdn.myanimelist.net/images/manga/1/157897t.webp",
                    "large_image_url" => "https://cdn.myanimelist.net/images/manga/1/157897l.webp"
                ]
            ],
            "title" => "Berserk",
            "status" => "Publishing",
            "genres" => [
                [
                    "mal_id" => 1,
                    "type" => "manga",
                    "name" => "Action",
                    "url" => "https://myanimelist.net/manga/genre/1/Action"
                ],
                [
                    "mal_id" => 2,
                    "type" => "manga",
                    "name" => "Adventure",
                    "url" => "https://myanimelist.net/manga/genre/2/Adventure"
                ],
                [
                    "mal_id" => 46,
                    "type" => "manga",
                    "name" => "Award Winning",
                    "url" => "https://myanimelist.net/manga/genre/46/Award_Winning"
                ],
                [
                    "mal_id" => 8,
                    "type" => "manga",
                    "name" => "Drama",
                    "url" => "https://myanimelist.net/manga/genre/8/Drama"
                ],
                [
                    "mal_id" => 10,
                    "type" => "manga",
                    "name" => "Fantasy",
                    "url" => "https://myanimelist.net/manga/genre/10/Fantasy"
                ],
                [
                    "mal_id" => 14,
                    "type" => "manga",
                    "name" => "Horror",
                    "url" => "https://myanimelist.net/manga/genre/14/Horror"
                ],
                [
                    "mal_id" => 37,
                    "type" => "manga",
                    "name" => "Supernatural",
                    "url" => "https://myanimelist.net/manga/genre/37/Supernatural"
                ]
            ]
        ],
        [
            "images" => [
                "jpg" => [
                    "image_url" => "https://cdn.myanimelist.net/images/manga/3/179882.jpg",
                    "small_image_url" => "https://cdn.myanimelist.net/images/manga/3/179882t.jpg",
                    "large_image_url" => "https://cdn.myanimelist.net/images/manga/3/179882l.jpg"
                ],
                "webp" => [
                    "image_url" => "https://cdn.myanimelist.net/images/manga/3/179882.webp",
                    "small_image_url" => "https://cdn.myanimelist.net/images/manga/3/179882t.webp",
                    "large_image_url" => "https://cdn.myanimelist.net/images/manga/3/179882l.webp"
                ]
            ],
            "title" => "JoJo no Kimyou na Bouken Part 7: Steel Ball Run",
            "status" => "Finished",
            "genres" => [
                [
                    "mal_id" => 1,
                    "type" => "manga",
                    "name" => "Action",
                    "url" => "https://myanimelist.net/manga/genre/1/Action"
                ],
                [
                    "mal_id" => 2,
                    "type" => "manga",
                    "name" => "Adventure",
                    "url" => "https://myanimelist.net/manga/genre/2/Adventure"
                ],
                [
                    "mal_id" => 7,
                    "type" => "manga",
                    "name" => "Mystery",
                    "url" => "https://myanimelist.net/manga/genre/7/Mystery"
                ],
                [
                    "mal_id" => 37,
                    "type" => "manga",
                    "name" => "Supernatural",
                    "url" => "https://myanimelist.net/manga/genre/37/Supernatural"
                ]
            ]
        ],
        [
            "images" => [
                "jpg" => [
                    "image_url" => "https://cdn.myanimelist.net/images/manga/2/253146.jpg",
                    "small_image_url" => "https://cdn.myanimelist.net/images/manga/2/253146t.jpg",
                    "large_image_url" => "https://cdn.myanimelist.net/images/manga/2/253146l.jpg"
                ],
                "webp" => [
                    "image_url" => "https://cdn.myanimelist.net/images/manga/2/253146.webp",
                    "small_image_url" => "https://cdn.myanimelist.net/images/manga/2/253146t.webp",
                    "large_image_url" => "https://cdn.myanimelist.net/images/manga/2/253146l.webp"
                ]
            ],
            "title" => "One Piece",
            "status" => "Publishing",
            "genres" => [
                [
                    "mal_id" => 1,
                    "type" => "manga",
                    "name" => "Action",
                    "url" => "https://myanimelist.net/manga/genre/1/Action"
                ],
                [
                    "mal_id" => 2,
                    "type" => "manga",
                    "name" => "Adventure",
                    "url" => "https://myanimelist.net/manga/genre/2/Adventure"
                ],
                [
                    "mal_id" => 10,
                    "type" => "manga",
                    "name" => "Fantasy",
                    "url" => "https://myanimelist.net/manga/genre/10/Fantasy"
                ]
            ]
        ],
        [
            "images" => [
                "jpg" => [
                    "image_url" => "https://cdn.myanimelist.net/images/manga/1/259070.jpg",
                    "small_image_url" => "https://cdn.myanimelist.net/images/manga/1/259070t.jpg",
                    "large_image_url" => "https://cdn.myanimelist.net/images/manga/1/259070l.jpg"
                ],
                "webp" => [
                    "image_url" => "https://cdn.myanimelist.net/images/manga/1/259070.webp",
                    "small_image_url" => "https://cdn.myanimelist.net/images/manga/1/259070t.webp",
                    "large_image_url" => "https://cdn.myanimelist.net/images/manga/1/259070l.webp"
                ]
            ],
            "title" => "Vagabond",
            "status" => "On Hiatus",
            "genres" => [
                [
                    "mal_id" => 1,
                    "type" => "manga",
                    "name" => "Action",
                    "url" => "https://myanimelist.net/manga/genre/1/Action"
                ],
                [
                    "mal_id" => 2,
                    "type" => "manga",
                    "name" => "Adventure",
                    "url" => "https://myanimelist.net/manga/genre/2/Adventure"
                ],
                [
                    "mal_id" => 46,
                    "type" => "manga",
                    "name" => "Award Winning",
                    "url" => "https://myanimelist.net/manga/genre/46/Award_Winning"
                ]
            ]
        ],
        [
            "images" => [
                "jpg" => [
                    "image_url" => "https://cdn.myanimelist.net/images/manga/3/258224.jpg",
                    "small_image_url" => "https://cdn.myanimelist.net/images/manga/3/258224t.jpg",
                    "large_image_url" => "https://cdn.myanimelist.net/images/manga/3/258224l.jpg"
                ],
                "webp" => [
                    "image_url" => "https://cdn.myanimelist.net/images/manga/3/258224.webp",
                    "small_image_url" => "https://cdn.myanimelist.net/images/manga/3/258224t.webp",
                    "large_image_url" => "https://cdn.myanimelist.net/images/manga/3/258224l.webp"
                ]
            ],
            "title" => "Monster",
            "status" => "Finished",
            "genres" => [
                [
                    "mal_id" => 46,
                    "type" => "manga",
                    "name" => "Award Winning",
                    "url" => "https://myanimelist.net/manga/genre/46/Award_Winning"
                ],
                [
                    "mal_id" => 8,
                    "type" => "manga",
                    "name" => "Drama",
                    "url" => "https://myanimelist.net/manga/genre/8/Drama"
                ],
                [
                    "mal_id" => 7,
                    "type" => "manga",
                    "name" => "Mystery",
                    "url" => "https://myanimelist.net/manga/genre/7/Mystery"
                ]
            ]
        ],
        [
            "images" => [
                "jpg" => [
                    "image_url" => "https://cdn.myanimelist.net/images/manga/2/258749.jpg",
                    "small_image_url" => "https://cdn.myanimelist.net/images/manga/2/258749t.jpg",
                    "large_image_url" => "https://cdn.myanimelist.net/images/manga/2/258749l.jpg"
                ],
                "webp" => [
                    "image_url" => "https://cdn.myanimelist.net/images/manga/2/258749.webp",
                    "small_image_url" => "https://cdn.myanimelist.net/images/manga/2/258749t.webp",
                    "large_image_url" => "https://cdn.myanimelist.net/images/manga/2/258749l.webp"
                ]
            ],
            "title" => "Slam Dunk",
            "status" => "Finished",
            "genres" => [
                [
                    "mal_id" => 46,
                    "type" => "manga",
                    "name" => "Award Winning",
                    "url" => "https://myanimelist.net/manga/genre/46/Award_Winning"
                ],
                [
                    "mal_id" => 30,
                    "type" => "manga",
                    "name" => "Sports",
                    "url" => "https://myanimelist.net/manga/genre/30/Sports"
                ]
            ]
        ],
        [
            "images" => [
                "jpg" => [
                    "image_url" => "https://cdn.myanimelist.net/images/manga/3/243675.jpg",
                    "small_image_url" => "https://cdn.myanimelist.net/images/manga/3/243675t.jpg",
                    "large_image_url" => "https://cdn.myanimelist.net/images/manga/3/243675l.jpg"
                ],
                "webp" => [
                    "image_url" => "https://cdn.myanimelist.net/images/manga/3/243675.webp",
                    "small_image_url" => "https://cdn.myanimelist.net/images/manga/3/243675t.webp",
                    "large_image_url" => "https://cdn.myanimelist.net/images/manga/3/243675l.webp"
                ]
            ],
            "title" => "Fullmetal Alchemist",
            "status" => "Finished",
            "genres" => [
                [
                    "mal_id" => 1,
                    "type" => "manga",
                    "name" => "Action",
                    "url" => "https://myanimelist.net/manga/genre/1/Action"
                ],
                [
                    "mal_id" => 2,
                    "type" => "manga",
                    "name" => "Adventure",
                    "url" => "https://myanimelist.net/manga/genre/2/Adventure"
                ],
                [
                    "mal_id" => 46,
                    "type" => "manga",
                    "name" => "Award Winning",
                    "url" => "https://myanimelist.net/manga/genre/46/Award_Winning"
                ],
                [
                    "mal_id" => 8,
                    "type" => "manga",
                    "name" => "Drama",
                    "url" => "https://myanimelist.net/manga/genre/8/Drama"
                ],
                [
                    "mal_id" => 10,
                    "type" => "manga",
                    "name" => "Fantasy",
                    "url" => "https://myanimelist.net/manga/genre/10/Fantasy"
                ]
            ]
        ],
        [
            "images" => [
                "jpg" => [
                    "image_url" => "https://cdn.myanimelist.net/images/manga/3/266834.jpg",
                    "small_image_url" => "https://cdn.myanimelist.net/images/manga/3/266834t.jpg",
                    "large_image_url" => "https://cdn.myanimelist.net/images/manga/3/266834l.jpg"
                ],
                "webp" => [
                    "image_url" => "https://cdn.myanimelist.net/images/manga/3/266834.webp",
                    "small_image_url" => "https://cdn.myanimelist.net/images/manga/3/266834t.webp",
                    "large_image_url" => "https://cdn.myanimelist.net/images/manga/3/266834l.webp"
                ]
            ],
            "title" => "Oyasumi Punpun",
            "status" => "Finished",
            "genres" => [
                [
                    "mal_id" => 8,
                    "type" => "manga",
                    "name" => "Drama",
                    "url" => "https://myanimelist.net/manga/genre/8/Drama"
                ],
                [
                    "mal_id" => 36,
                    "type" => "manga",
                    "name" => "Slice of Life",
                    "url" => "https://myanimelist.net/manga/genre/36/Slice_of_Life"
                ]
            ]
        ],
        [
            "images" => [
                "jpg" => [
                    "image_url" => "https://cdn.myanimelist.net/images/manga/2/166124.jpg",
                    "small_image_url" => "https://cdn.myanimelist.net/images/manga/2/166124t.jpg",
                    "large_image_url" => "https://cdn.myanimelist.net/images/manga/2/166124l.jpg"
                ],
                "webp" => [
                    "image_url" => "https://cdn.myanimelist.net/images/manga/2/166124.webp",
                    "small_image_url" => "https://cdn.myanimelist.net/images/manga/2/166124t.webp",
                    "large_image_url" => "https://cdn.myanimelist.net/images/manga/2/166124l.webp"
                ]
            ],
            "title" => "Grand Blue",
            "status" => "Publishing",
            "genres" => [
                [
                    "mal_id" => 4,
                    "type" => "manga",
                    "name" => "Comedy",
                    "url" => "https://myanimelist.net/manga/genre/4/Comedy"
                ]
            ]
        ],
        [
            "images" => [
                "jpg" => [
                    "image_url" => "https://cdn.myanimelist.net/images/manga/2/188925.jpg",
                    "small_image_url" => "https://cdn.myanimelist.net/images/manga/2/188925t.jpg",
                    "large_image_url" => "https://cdn.myanimelist.net/images/manga/2/188925l.jpg"
                ],
                "webp" => [
                    "image_url" => "https://cdn.myanimelist.net/images/manga/2/188925.webp",
                    "small_image_url" => "https://cdn.myanimelist.net/images/manga/2/188925t.webp",
                    "large_image_url" => "https://cdn.myanimelist.net/images/manga/2/188925l.webp"
                ]
            ],
            "title" => "Vinland Saga",
            "status" => "Publishing",
            "genres" => [
                [
                    "mal_id" => 1,
                    "type" => "manga",
                    "name" => "Action",
                    "url" => "https://myanimelist.net/manga/genre/1/Action"
                ],
                [
                    "mal_id" => 2,
                    "type" => "manga",
                    "name" => "Adventure",
                    "url" => "https://myanimelist.net/manga/genre/2/Adventure"
                ],
                [
                    "mal_id" => 46,
                    "type" => "manga",
                    "name" => "Award Winning",
                    "url" => "https://myanimelist.net/manga/genre/46/Award_Winning"
                ],
                [
                    "mal_id" => 8,
                    "type" => "manga",
                    "name" => "Drama",
                    "url" => "https://myanimelist.net/manga/genre/8/Drama"
                ]
            ]
        ],
        [
            "images" => [
                "jpg" => [
                    "image_url" => "https://cdn.myanimelist.net/images/manga/2/171872.jpg",
                    "small_image_url" => "https://cdn.myanimelist.net/images/manga/2/171872t.jpg",
                    "large_image_url" => "https://cdn.myanimelist.net/images/manga/2/171872l.jpg"
                ],
                "webp" => [
                    "image_url" => "https://cdn.myanimelist.net/images/manga/2/171872.webp",
                    "small_image_url" => "https://cdn.myanimelist.net/images/manga/2/171872t.webp",
                    "large_image_url" => "https://cdn.myanimelist.net/images/manga/2/171872l.webp"
                ]
            ],
            "title" => "Kingdom",
            "status" => "Publishing",
            "genres" => [
                [
                    "mal_id" => 1,
                    "type" => "manga",
                    "name" => "Action",
                    "url" => "https://myanimelist.net/manga/genre/1/Action"
                ],
                [
                    "mal_id" => 46,
                    "type" => "manga",
                    "name" => "Award Winning",
                    "url" => "https://myanimelist.net/manga/genre/46/Award_Winning"
                ]
            ]
        ],
        [
            "images" => [
                "jpg" => [
                    "image_url" => "https://cdn.myanimelist.net/images/manga/5/260006.jpg",
                    "small_image_url" => "https://cdn.myanimelist.net/images/manga/5/260006t.jpg",
                    "large_image_url" => "https://cdn.myanimelist.net/images/manga/5/260006l.jpg"
                ],
                "webp" => [
                    "image_url" => "https://cdn.myanimelist.net/images/manga/5/260006.webp",
                    "small_image_url" => "https://cdn.myanimelist.net/images/manga/5/260006t.webp",
                    "large_image_url" => "https://cdn.myanimelist.net/images/manga/5/260006l.webp"
                ]
            ],
            "title" => "20th Century Boys",
            "status" => "Finished",
            "genres" => [
                [
                    "mal_id" => 46,
                    "type" => "manga",
                    "name" => "Award Winning",
                    "url" => "https://myanimelist.net/manga/genre/46/Award_Winning"
                ],
                [
                    "mal_id" => 8,
                    "type" => "manga",
                    "name" => "Drama",
                    "url" => "https://myanimelist.net/manga/genre/8/Drama"
                ],
                [
                    "mal_id" => 7,
                    "type" => "manga",
                    "name" => "Mystery",
                    "url" => "https://myanimelist.net/manga/genre/7/Mystery"
                ],
                [
                    "mal_id" => 24,
                    "type" => "manga",
                    "name" => "Sci-Fi",
                    "url" => "https://myanimelist.net/manga/genre/24/Sci-Fi"
                ]
            ]
        ],
        [
            "images" => [
                "jpg" => [
                    "image_url" => "https://cdn.myanimelist.net/images/manga/1/115443.jpg",
                    "small_image_url" => "https://cdn.myanimelist.net/images/manga/1/115443t.jpg",
                    "large_image_url" => "https://cdn.myanimelist.net/images/manga/1/115443l.jpg"
                ],
                "webp" => [
                    "image_url" => "https://cdn.myanimelist.net/images/manga/1/115443.webp",
                    "small_image_url" => "https://cdn.myanimelist.net/images/manga/1/115443t.webp",
                    "large_image_url" => "https://cdn.myanimelist.net/images/manga/1/115443l.webp"
                ]
            ],
            "title" => "Houseki no Kuni",
            "status" => "Publishing",
            "genres" => [
                [
                    "mal_id" => 1,
                    "type" => "manga",
                    "name" => "Action",
                    "url" => "https://myanimelist.net/manga/genre/1/Action"
                ],
                [
                    "mal_id" => 8,
                    "type" => "manga",
                    "name" => "Drama",
                    "url" => "https://myanimelist.net/manga/genre/8/Drama"
                ],
                [
                    "mal_id" => 10,
                    "type" => "manga",
                    "name" => "Fantasy",
                    "url" => "https://myanimelist.net/manga/genre/10/Fantasy"
                ]
            ]
        ],
        [
            "images" => [
                "jpg" => [
                    "image_url" => "https://cdn.myanimelist.net/images/manga/5/173535.jpg",
                    "small_image_url" => "https://cdn.myanimelist.net/images/manga/5/173535t.jpg",
                    "large_image_url" => "https://cdn.myanimelist.net/images/manga/5/173535l.jpg"
                ],
                "webp" => [
                    "image_url" => "https://cdn.myanimelist.net/images/manga/5/173535.webp",
                    "small_image_url" => "https://cdn.myanimelist.net/images/manga/5/173535t.webp",
                    "large_image_url" => "https://cdn.myanimelist.net/images/manga/5/173535l.webp"
                ]
            ],
            "title" => "Monogatari Series: First Season",
            "status" => "Finished",
            "genres" => [
                [
                    "mal_id" => 1,
                    "type" => "manga",
                    "name" => "Action",
                    "url" => "https://myanimelist.net/manga/genre/1/Action"
                ],
                [
                    "mal_id" => 4,
                    "type" => "manga",
                    "name" => "Comedy",
                    "url" => "https://myanimelist.net/manga/genre/4/Comedy"
                ],
                [
                    "mal_id" => 7,
                    "type" => "manga",
                    "name" => "Mystery",
                    "url" => "https://myanimelist.net/manga/genre/7/Mystery"
                ],
                [
                    "mal_id" => 22,
                    "type" => "manga",
                    "name" => "Romance",
                    "url" => "https://myanimelist.net/manga/genre/22/Romance"
                ],
                [
                    "mal_id" => 37,
                    "type" => "manga",
                    "name" => "Supernatural",
                    "url" => "https://myanimelist.net/manga/genre/37/Supernatural"
                ]
            ]
        ],
        [
            "images" => [
                "jpg" => [
                    "image_url" => "https://cdn.myanimelist.net/images/manga/3/235363.jpg",
                    "small_image_url" => "https://cdn.myanimelist.net/images/manga/3/235363t.jpg",
                    "large_image_url" => "https://cdn.myanimelist.net/images/manga/3/235363l.jpg"
                ],
                "webp" => [
                    "image_url" => "https://cdn.myanimelist.net/images/manga/3/235363.webp",
                    "small_image_url" => "https://cdn.myanimelist.net/images/manga/3/235363t.webp",
                    "large_image_url" => "https://cdn.myanimelist.net/images/manga/3/235363l.webp"
                ]
            ],
            "title" => "Youkoso Jitsuryoku Shijou Shugi no Kyoushitsu e: 2-nensei-hen",
            "status" => "Publishing",
            "genres" => [
                [
                    "mal_id" => 8,
                    "type" => "manga",
                    "name" => "Drama",
                    "url" => "https://myanimelist.net/manga/genre/8/Drama"
                ]
            ]
        ],
        [
            "images" => [
                "jpg" => [
                    "image_url" => "https://cdn.myanimelist.net/images/manga/1/268827.jpg",
                    "small_image_url" => "https://cdn.myanimelist.net/images/manga/1/268827t.jpg",
                    "large_image_url" => "https://cdn.myanimelist.net/images/manga/1/268827l.jpg"
                ],
                "webp" => [
                    "image_url" => "https://cdn.myanimelist.net/images/manga/1/268827.webp",
                    "small_image_url" => "https://cdn.myanimelist.net/images/manga/1/268827t.webp",
                    "large_image_url" => "https://cdn.myanimelist.net/images/manga/1/268827l.webp"
                ]
            ],
            "title" => "Ashita no Joe",
            "status" => "Finished",
            "genres" => [
                [
                    "mal_id" => 8,
                    "type" => "manga",
                    "name" => "Drama",
                    "url" => "https://myanimelist.net/manga/genre/8/Drama"
                ],
                [
                    "mal_id" => 36,
                    "type" => "manga",
                    "name" => "Slice of Life",
                    "url" => "https://myanimelist.net/manga/genre/36/Slice_of_Life"
                ],
                [
                    "mal_id" => 30,
                    "type" => "manga",
                    "name" => "Sports",
                    "url" => "https://myanimelist.net/manga/genre/30/Sports"
                ]
            ]
        ],
        [
            "images" => [
                "jpg" => [
                    "image_url" => "https://cdn.myanimelist.net/images/manga/2/177958.jpg",
                    "small_image_url" => "https://cdn.myanimelist.net/images/manga/2/177958t.jpg",
                    "large_image_url" => "https://cdn.myanimelist.net/images/manga/2/177958l.jpg"
                ],
                "webp" => [
                    "image_url" => "https://cdn.myanimelist.net/images/manga/2/177958.webp",
                    "small_image_url" => "https://cdn.myanimelist.net/images/manga/2/177958t.webp",
                    "large_image_url" => "https://cdn.myanimelist.net/images/manga/2/177958l.webp"
                ]
            ],
            "title" => "Youkoso Jitsuryoku Shijou Shugi no Kyoushitsu e",
            "status" => "Finished",
            "genres" => [
                [
                    "mal_id" => 8,
                    "type" => "manga",
                    "name" => "Drama",
                    "url" => "https://myanimelist.net/manga/genre/8/Drama"
                ]
            ]
        ],
        [
            "images" => [
                "jpg" => [
                    "image_url" => "https://cdn.myanimelist.net/images/manga/3/188896.jpg",
                    "small_image_url" => "https://cdn.myanimelist.net/images/manga/3/188896t.jpg",
                    "large_image_url" => "https://cdn.myanimelist.net/images/manga/3/188896l.jpg"
                ],
                "webp" => [
                    "image_url" => "https://cdn.myanimelist.net/images/manga/3/188896.webp",
                    "small_image_url" => "https://cdn.myanimelist.net/images/manga/3/188896t.webp",
                    "large_image_url" => "https://cdn.myanimelist.net/images/manga/3/188896l.webp"
                ]
            ],
            "title" => "Kaguya-sama wa Kokurasetai: Tensai-tachi no Renai Zunousen",
            "status" => "Finished",
            "genres" => [
                [
                    "mal_id" => 46,
                    "type" => "manga",
                    "name" => "Award Winning",
                    "url" => "https://myanimelist.net/manga/genre/46/Award_Winning"
                ],
                [
                    "mal_id" => 4,
                    "type" => "manga",
                    "name" => "Comedy",
                    "url" => "https://myanimelist.net/manga/genre/4/Comedy"
                ]
            ]
        ],
        [
            "images" => [
                "jpg" => [
                    "image_url" => "https://cdn.myanimelist.net/images/manga/2/181553.jpg",
                    "small_image_url" => "https://cdn.myanimelist.net/images/manga/2/181553t.jpg",
                    "large_image_url" => "https://cdn.myanimelist.net/images/manga/2/181553l.jpg"
                ],
                "webp" => [
                    "image_url" => "https://cdn.myanimelist.net/images/manga/2/181553.webp",
                    "small_image_url" => "https://cdn.myanimelist.net/images/manga/2/181553t.webp",
                    "large_image_url" => "https://cdn.myanimelist.net/images/manga/2/181553l.webp"
                ]
            ],
            "title" => "Monogatari Series: Second Season",
            "status" => "Finished",
            "genres" => [
                [
                    "mal_id" => 4,
                    "type" => "manga",
                    "name" => "Comedy",
                    "url" => "https://myanimelist.net/manga/genre/4/Comedy"
                ],
                [
                    "mal_id" => 8,
                    "type" => "manga",
                    "name" => "Drama",
                    "url" => "https://myanimelist.net/manga/genre/8/Drama"
                ],
                [
                    "mal_id" => 7,
                    "type" => "manga",
                    "name" => "Mystery",
                    "url" => "https://myanimelist.net/manga/genre/7/Mystery"
                ],
                [
                    "mal_id" => 37,
                    "type" => "manga",
                    "name" => "Supernatural",
                    "url" => "https://myanimelist.net/manga/genre/37/Supernatural"
                ]
            ]
        ],
        [
            "images" => [
                "jpg" => [
                    "image_url" => "https://cdn.myanimelist.net/images/manga/3/248674.jpg",
                    "small_image_url" => "https://cdn.myanimelist.net/images/manga/3/248674t.jpg",
                    "large_image_url" => "https://cdn.myanimelist.net/images/manga/3/248674l.jpg"
                ],
                "webp" => [
                    "image_url" => "https://cdn.myanimelist.net/images/manga/3/248674.webp",
                    "small_image_url" => "https://cdn.myanimelist.net/images/manga/3/248674t.webp",
                    "large_image_url" => "https://cdn.myanimelist.net/images/manga/3/248674l.webp"
                ]
            ],
            "title" => "Mikkakan no Koufuku",
            "status" => "Finished",
            "genres" => [
                [
                    "mal_id" => 8,
                    "type" => "manga",
                    "name" => "Drama",
                    "url" => "https://myanimelist.net/manga/genre/8/Drama"
                ]
            ]
        ],
        [
            "images" => [
                "jpg" => [
                    "image_url" => "https://cdn.myanimelist.net/images/manga/2/115969.jpg",
                    "small_image_url" => "https://cdn.myanimelist.net/images/manga/2/115969t.jpg",
                    "large_image_url" => "https://cdn.myanimelist.net/images/manga/2/115969l.jpg"
                ],
                "webp" => [
                    "image_url" => "https://cdn.myanimelist.net/images/manga/2/115969.webp",
                    "small_image_url" => "https://cdn.myanimelist.net/images/manga/2/115969t.webp",
                    "large_image_url" => "https://cdn.myanimelist.net/images/manga/2/115969l.webp"
                ]
            ],
            "title" => "Real",
            "status" => "Publishing",
            "genres" => [
                [
                    "mal_id" => 8,
                    "type" => "manga",
                    "name" => "Drama",
                    "url" => "https://myanimelist.net/manga/genre/8/Drama"
                ],
                [
                    "mal_id" => 30,
                    "type" => "manga",
                    "name" => "Sports",
                    "url" => "https://myanimelist.net/manga/genre/30/Sports"
                ]
            ]
        ],
        [
            "images" => [
                "jpg" => [
                    "image_url" => "https://cdn.myanimelist.net/images/manga/2/52283.jpg",
                    "small_image_url" => "https://cdn.myanimelist.net/images/manga/2/52283t.jpg",
                    "large_image_url" => "https://cdn.myanimelist.net/images/manga/2/52283l.jpg"
                ],
                "webp" => [
                    "image_url" => "https://cdn.myanimelist.net/images/manga/2/52283.webp",
                    "small_image_url" => "https://cdn.myanimelist.net/images/manga/2/52283t.webp",
                    "large_image_url" => "https://cdn.myanimelist.net/images/manga/2/52283l.webp"
                ]
            ],
            "title" => "3-gatsu no Lion",
            "status" => "Publishing",
            "genres" => [
                [
                    "mal_id" => 46,
                    "type" => "manga",
                    "name" => "Award Winning",
                    "url" => "https://myanimelist.net/manga/genre/46/Award_Winning"
                ],
                [
                    "mal_id" => 8,
                    "type" => "manga",
                    "name" => "Drama",
                    "url" => "https://myanimelist.net/manga/genre/8/Drama"
                ],
                [
                    "mal_id" => 36,
                    "type" => "manga",
                    "name" => "Slice of Life",
                    "url" => "https://myanimelist.net/manga/genre/36/Slice_of_Life"
                ]
            ]
        ],
        [
            "images" => [
                "jpg" => [
                    "image_url" => "https://cdn.myanimelist.net/images/manga/2/172982.jpg",
                    "small_image_url" => "https://cdn.myanimelist.net/images/manga/2/172982t.jpg",
                    "large_image_url" => "https://cdn.myanimelist.net/images/manga/2/172982l.jpg"
                ],
                "webp" => [
                    "image_url" => "https://cdn.myanimelist.net/images/manga/2/172982.webp",
                    "small_image_url" => "https://cdn.myanimelist.net/images/manga/2/172982t.webp",
                    "large_image_url" => "https://cdn.myanimelist.net/images/manga/2/172982l.webp"
                ]
            ],
            "title" => "GTO",
            "status" => "Finished",
            "genres" => [
                [
                    "mal_id" => 1,
                    "type" => "manga",
                    "name" => "Action",
                    "url" => "https://myanimelist.net/manga/genre/1/Action"
                ],
                [
                    "mal_id" => 46,
                    "type" => "manga",
                    "name" => "Award Winning",
                    "url" => "https://myanimelist.net/manga/genre/46/Award_Winning"
                ],
                [
                    "mal_id" => 4,
                    "type" => "manga",
                    "name" => "Comedy",
                    "url" => "https://myanimelist.net/manga/genre/4/Comedy"
                ],
                [
                    "mal_id" => 8,
                    "type" => "manga",
                    "name" => "Drama",
                    "url" => "https://myanimelist.net/manga/genre/8/Drama"
                ],
                [
                    "mal_id" => 9,
                    "type" => "manga",
                    "name" => "Ecchi",
                    "url" => "https://myanimelist.net/manga/genre/9/Ecchi"
                ]
            ]
        ],
        [
            "images" => [
                "jpg" => [
                    "image_url" => "https://cdn.myanimelist.net/images/manga/5/259524.jpg",
                    "small_image_url" => "https://cdn.myanimelist.net/images/manga/5/259524t.jpg",
                    "large_image_url" => "https://cdn.myanimelist.net/images/manga/5/259524l.jpg"
                ],
                "webp" => [
                    "image_url" => "https://cdn.myanimelist.net/images/manga/5/259524.webp",
                    "small_image_url" => "https://cdn.myanimelist.net/images/manga/5/259524t.webp",
                    "large_image_url" => "https://cdn.myanimelist.net/images/manga/5/259524l.webp"
                ]
            ],
            "title" => "Yotsuba to!",
            "status" => "Publishing",
            "genres" => [
                [
                    "mal_id" => 46,
                    "type" => "manga",
                    "name" => "Award Winning",
                    "url" => "https://myanimelist.net/manga/genre/46/Award_Winning"
                ],
                [
                    "mal_id" => 4,
                    "type" => "manga",
                    "name" => "Comedy",
                    "url" => "https://myanimelist.net/manga/genre/4/Comedy"
                ],
                [
                    "mal_id" => 36,
                    "type" => "manga",
                    "name" => "Slice of Life",
                    "url" => "https://myanimelist.net/manga/genre/36/Slice_of_Life"
                ]
            ]
        ],
        [
            "images" => [
                "jpg" => [
                    "image_url" => "https://cdn.myanimelist.net/images/manga/1/181554.jpg",
                    "small_image_url" => "https://cdn.myanimelist.net/images/manga/1/181554t.jpg",
                    "large_image_url" => "https://cdn.myanimelist.net/images/manga/1/181554l.jpg"
                ],
                "webp" => [
                    "image_url" => "https://cdn.myanimelist.net/images/manga/1/181554.webp",
                    "small_image_url" => "https://cdn.myanimelist.net/images/manga/1/181554t.webp",
                    "large_image_url" => "https://cdn.myanimelist.net/images/manga/1/181554l.webp"
                ]
            ],
            "title" => "Monogatari Series: Final Season",
            "status" => "Finished",
            "genres" => [
                [
                    "mal_id" => 4,
                    "type" => "manga",
                    "name" => "Comedy",
                    "url" => "https://myanimelist.net/manga/genre/4/Comedy"
                ],
                [
                    "mal_id" => 7,
                    "type" => "manga",
                    "name" => "Mystery",
                    "url" => "https://myanimelist.net/manga/genre/7/Mystery"
                ],
                [
                    "mal_id" => 37,
                    "type" => "manga",
                    "name" => "Supernatural",
                    "url" => "https://myanimelist.net/manga/genre/37/Supernatural"
                ]
            ]
        ]
    ];

    public static function all(){
        return self::$mangaList;
    }
}
