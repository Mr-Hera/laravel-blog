<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Blog;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(4)->create();
        $user = User::factory()->create([
            'name' => 'Mr Hera',
            'email' => 'mrhera@gmail.com',
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Blog::create([
            'user_id' => $user->id,
            'title' => 'M1',
            'tags' => 'sport',
            'published' => '1982_01_06',
            'description' => 'Think of the builders of your favorite supercars 
            and BMW may not fall on your personal short list, but in the late 
            1970s, the German automaker developed one of the more interesting 
            mid-engine performance cars of all time. Born out of a desire to 
            replace the aging 3.0 CSL race cars that BMW\'s then-newly founded 
            Motorsports division campaigned around the world, the M1 was to be 
            a state-of-the-art Group 4 race car, but homologation requirements 
            demanded BMW build 400 road cars to homologate it.'
        ]);
        Blog::create([
            'user_id' => $user->id,
            'title' => 'M2',
            'tags' => 'sport',
            'published' => '1980_11_10',
            'description' => 'The BMW M2 is a high-performance version of the 
            BMW 2 Series automobile developed by BMW\'s motorsport division, 
            BMW M GmbH. As the 2 Series replaced the 1 Series coupé and convertible 
            models, the first generation M2 was marketed as the most basic M Car in 
            the range. The M2 used the F8x chassis from the M3/M4, code name F87 and 
            featured a more powerful and responsive, turbocharged and slightly 
            modified BMW N55 series engine, while its successors, the M2 Competition 
            and M2 CS, featured a high performance twin-turbocharged engine developed 
            by BMW M GmbH (S55 engine); improved handling, suspension, and braking 
            systems; aerodynamic body enhancements; interior/exterior accents with 
            the tri-colour \"M\" (Motorsport) badging and increased weight. The M2 
            is unofficially considered as an indirect successor to the BMW 1 Series 
            M Coupé.'
        ]);
        Blog::create([
            'user_id' => $user->id,
            'title' => 'M3',
            'tags' => 'sport',
            'published' => '2019_01_23',
            'description' => 'The BMW M3 has a madness inside it. Its standard powertrain 
            bottles up 473 horsepower from a twin-turbo straight-six, shoots it through a 
            six-speed manual transmission, and wastes no time delivering it to the rear tires. 
            And that’s only the start. The M3 Competition, which is only offered with an eight-speed 
            automatic, increases horsepressure to 503 and is offered with your choice of rear- or 
            all-wheel drive. With all that power, you’d think the M3 would be incapable of doing slow, 
            but even when driven at law-abiding speeds, it’s quite nice. While rivals such as the Cadillac 
            CT4-V Blackwing and Alfa Romeo Giulia Quadrifoglio feel at times more refined and less edgy, 
            there isn’t a wrong choice among the three brands’ super sedans. For an even more righteous 
            experience, there’s the new-for-2024 M3 CS. It sheds an estimated 75 pounds from the base M3 
            and hammers the pavement with 543 horsepower and all-wheel drive.'
        ]);
        Blog::create([
            'user_id' => $user->id,
            'title' => 'M4',
            'tags' => 'sport',
            'published' => '2000_11_05',
            'description' => 'As the M3 is to the 3 Series, the M4 is the high-performance version of the 4 Series. 
            Originally introduced for model year 2015, the current G82-generation M4 went on sale for 2021. Available 
            in coupe or convertible body styles, with a manual or automatic transmission, rear- or all-wheel drive, and 
            varying levels of engine output, the M4 remains focused on combining sport and luxury in a way that only BMW\'s 
            Motorsports division knows how.'
        ]);
        Blog::create([
            'user_id' => $user->id,
            'title' => 'M5',
            'tags' => 'sport',
            'published' => '1997_07_17',
            'description' => 'Some cars are big-bodied and some are thrilling. The BMW M5 is both, with a body based on the 
            regular 5-series and a heart-and-lung transplant courtesy of the brand\’s M performance division. Under the hood 
            lives a spectacular 600-hp twin-turbo V-8 bolted to an eight-speed automatic transmission that powers all four wheels. 
            An optional Competition package turns up the heat with 17 extra horsepower, a more soulful exhaust, stiffer suspension, 
            and Competition badging and trim. That version rocketed to 60 mph in 2.8 seconds in our testing. Built to handle the rigors 
            of mountain hairpins, blasts on the autobahn, and everyday life the M5 offers a premium experience with a penchant for fireworks. 
            Unlike its closest competitor, the Cadillac CT5-V Blackwing, the Bimmer’s stealthy packaging isn’t offset by a thunderous exhaust 
            but its impressive comfort and refinement make it among the best in the premium sports sedan segment.'
        ]);
        Blog::create([
            'user_id' => $user->id,
            'title' => 'M6',
            'tags' => 'sport',
            'published' => '1978_08_08',
            'description' => 'The BMW M6 is a high-performance version of the 6 Series marketed under the BMW M sub-brand from 1983 to 2018 
            (with a break from 1990 to 2004). Introduced in the coupe body style, the M6 was also built in convertible and fastback sedan 
            (\'Gran Coupe\') body styles for later generations. An M6 model was built for each of the first three generations of the 6 Series. 
            Production of the M6 ended in 2018 and it was replaced by the BMW M8 (F91/F92/F93) in 2019.'
        ]);
        Blog::create([
            'user_id' => $user->id,
            'title' => 'i8',
            'tags' => 'electric',
            'published' => '2022_08_08',
            'description' => 'The BMW i8 is a plug-in hybrid sports car developed by BMW. The i8 was part of BMW\'s electrified fleet and was 
            marketed under the BMW i sub-brand. The production version of the BMW i8 was unveiled at the 2013 Frankfurt Motor Show and was 
            released in Germany in June 2014. Deliveries to retail customers in the U.S. began in August 2014. A roadster variant was launched 
            in May 2018. Production ended in June 2020.'
        ]);

        // Blog::factory(6)->create();
    }
}
