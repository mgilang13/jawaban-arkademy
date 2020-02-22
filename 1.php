<?php
function myBiodata() {
$biodata = array( 
    "name"=>"Muhammad Gilang Nur Khoiri", 
    "age" => 24,
    "address" => "Sumberejo RT 20 / RW 07 Sumberbening, Bringin, Ngawi",
    "hobbies" => array(
            "Membaca Buku",
            "Main Game",
            "Lari-lari"
        ),
    "is_married" => 0,
    "list_school" => [
                ["name" => "Universitas Gadjah Mada", "year_in" => 2014, "year_out" => 2018, "major" => "D3 Komputer dan Sistem Informasi"],
                ["name" => "SMA N 1 Mejayan", "year_in" => 2011, "year_out" => 2014, "major" => "IPA"],
                ["name" => "SMP N 1 Karangjati", "year_in" => 2008, "year_out" => 2011, "major" => null],
                ["name" => "SD N Sumberbening 4", "year_in" => 2002, "year_out" => 2008, "major" => null]
            ],
    "skills" => [
            ["skill_name" => "PHP", "level" => "advanced"],
            ["skill_name" => "HTML", "level" => "advanced"],
            ["skill_name" => "CSS", "level" => "advanced"],
            ["skill_name" => "Javascript", "level" => "advanced"],
            ["skill_name" => "Codeigniter", "level" => "advanced"],
            ["skill_name" => "Laravel", "level" => "beginner"],
            ["skill_name" => "Vue", "level" => "advanced"],
            ["skill_name" => "Flutter", "level" => "beginner"]
        ],
    "interest_in_coding" => 1
    );

$reBiodata = json_encode($biodata);
echo $reBiodata;
}

myBiodata();