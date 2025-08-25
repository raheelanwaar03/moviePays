<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
    {{-- Datatable --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    {{-- favicon --}}
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/favicon.png') }}">
    {{-- style --}}
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
    <script src="https://kit.fontawesome.com/fb965b455a.js" crossorigin="anonymous"></script>
    <title>{{ env('APP_NAME') }}</title>
    <style>
        p {
            color: white;
        }

        h1 {
            color: white;
        }

        h4 {
            color: white;
        }
    </style>
</head>

<body style="background-image: url({{ asset('assets/img/bg.jpg') }});">

    <div class="container">
        <div class="row m-3">
            <div class="col-sm-12 d-flex justify-content-center align-items-center">
                <div class="col-md-12 p-3 mt-5" style="background-color: rgb(255, 0, 0)">
                    <a href="{{ route('User.Dashboard') }}" class="text-center text-decoration-none">
                        <div style="float:left;">
                            <img src="{{ asset('assets/logo.png') }}" alt="" height="80px" width="80px">
                        </div>
                        <h3 class="text-center text-white text-decoration-none">Welcome To {{ env('APP_NAME') }}</h3>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row m-3">
            <div class="col-md-12">
                <h1 class="text-white text-center">About Us</h1>

                <p>
                    In a rapidly evolving world, the importance of making informed financial decisions has never
                    been greater. At Moviespays, we believe that everyone deserves access to the tools,
                    knowledge, and opportunities necessary to achieve their financial goals. We are a leading
                    online investment platform, dedicated to empowering individuals with the resources they need
                    to navigate the intricate landscape of financial markets.
                </p>

                <h4>
                    Our Vision
                </h4>
                <p>
                    Our vision is to create a world where investing is accessible, transparent, and rewarding
                    for all. We strive to be the most trusted and user-friendly platform that brings individuals
                    closer to their dreams, whether it be financial independence, funding their child's
                    education, early retirement, or building a prosperous future for their loved ones.
                </p>

                <h4>
                    Empowering Investors
                </h4>

                <p>
                    At Moviespays, we put the power of financial decision-making into the hands of our
                    users. With a user-centric approach, we offer a wide array of investment options spanning
                    across diverse asset classes. From stocks and bonds to cryptocurrencies and real estate, our
                    platform caters to both beginners and seasoned investors, ensuring that no one feels left
                    behind on their investment journey.
                </p>

                <h4>
                    Transparency and Security
                </h4>
                <p>
                    We take transparency and security seriously. Our team of experienced professionals
                    diligently curates and presents accurate information, enabling our users to make
                    well-informed choices. Our platform is equipped with cutting-edge security measures to
                    safeguard our users' data and financial transactions. We constantly update and reinforce our
                    security protocols to stay ahead of potential threats and vulnerabilities.
                </p>

                <h4>
                    Education and Learning
                </h4>

                <p>
                    Education is at the heart of successful investing. We understand that navigating the
                    financial markets can be intimidating for newcomers, which is why we provide a wealth of
                    educational resources. From comprehensive guides and video tutorials to webinars and market
                    analysis, our goal is to empower investors with the knowledge they need to make sound
                    financial decisions.
                </p>

                <h4>
                    Personalized Investment Solutions
                </h4>
                <p>
                    We recognize that each investor has unique financial goals and risk appetites. Our platform
                    offers personalized investment solutions tailored to individual needs. Whether you prefer
                    hands-on trading or a more hands-off approach through automated investing, we've got you
                    covered. Our intuitive tools and customizable portfolios help users build and manage their
                    investments efficiently.
                </p>

                <h4>
                    Customer Support
                </h4>
                <p>
                    At Moviespays, our users are our priority. Our customer support team is available
                    round the clock to assist with any queries, concerns, or technical issues. We believe in
                    fostering long-term relationships with our users and are committed to delivering exceptional
                    customer experiences.
                </p>

                <h4>
                    Social Responsibility
                </h4>
                <p>
                    We believe in giving back to the community and creating a positive impact. As part of our
                    commitment to social responsibility, we support various initiatives aimed at education,
                    environmental sustainability, and poverty alleviation. By investing with us, our users
                    contribute to building a better and more sustainable world.
                </p>
                <h4>
                    Join the Moviespays Family Today
                </h4>
                <p>
                    Whether you are a seasoned investor or taking your first steps into the world of finance,
                    Moviespays is your ideal partner on your journey to financial success. Our
                    user-friendly platform, comprehensive educational resources, and personalized investment
                    solutions set us apart from the rest. Join us today and embark on a path towards a brighter
                    financial future!
                </p>

            </div>
        </div>
    </div>
</body>

</html>
