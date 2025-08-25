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
    <script src="https://www.youtube.com/iframe_api"></script>

    {{-- jquery --}}

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    {{-- style --}}
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
    <script src="https://kit.fontawesome.com/fb965b455a.js" crossorigin="anonymous"></script>
    <title>{{ env('APP_NAME') }}</title>

    <style>
        .star {
            display: inline-block;
            font-size: 24px;
            cursor: pointer;
            color: white;
        }
    </style>

</head>

<body style="background-image: url({{ asset('assets/img/bg.jpg') }});">

    <x-alert />

    <div class="container">
        <div class="row m-3">
            <div class="col-sm-12 d-flex justify-content-center align-items-center">
                <div class="col-md-12 p-3 mt-5" style="background-color: blue">
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
            @forelse ($allVideos as $video)
                <div class="col-md-4 mb-3">
                    <div class="card" style="width: 18rem;background-color: blue;">
                        <video controls autoplay="false">
                            <source src="{{ asset('video/' . $video->link) }}" type="video/mp4">
                        </video>
                        <div class="card-body">
                          <h5 class="card-title text-white">Watch and earn</h5>
                          <p class="card-text text-white">{{ $video->text }}</p>
                          <div class="star" onclick="toggleStar(this)">★</div>
                          <div class="star" onclick="toggleStar(this)">★</div>
                          <div class="star" onclick="toggleStar(this)">★</div>
                          <div class="star" onclick="toggleStar(this)">★</div>
                          <div class="star" onclick="toggleStar(this)">★</div>

                          <script>
                            function toggleStar(star) {
                                if (star.style.color === 'white') {
                                    star.style.color = 'gold';
                                } else {
                                    star.style.color = 'white';
                                }
                            }
                        </script>
                          <div class="d-flex justify-content-around align-items-center">
                              <a href="{{ route('User.Type.Task', ['id' => $video->id]) }}" class="btn btn-primary">Submit</a>
                              <button id="shareButton" class="btn btn-sm btn-info text-white">Share Now</button>
                          </div>
                        </div>
                      </div>
                </div>

                <script>
                   // Check if Web Share API is supported
if (navigator.share) {
  const shareButton = document.getElementById('shareButton');
  shareButton.addEventListener('click', shareVideo);
} else {
  console.log('Web Share API is not supported in this browser.');
}

function shareVideo() {
  // Get the video link
  const videoLink = '{{ $video->link }}'; // Replace with your video link

  // Check if Web Share API is supported
  if (navigator.share) {
    // Use Web Share API to share the video link
    navigator.share({
      title: 'Check out this video',
      url: videoLink
    })
      .then(() => console.log('Video shared successfully.'))
      .catch((error) => console.log('Error sharing video:', error));
  } else {
    // If Web Share API is not supported, display a prompt with the video link and copy option
    const promptText = `Share this video:\n${videoLink}`;

    // Create a textarea element to hold the video link
    const textarea = document.createElement('textarea');
    textarea.value = videoLink;
    textarea.style.position = 'fixed'; // Ensure the textarea is hidden
    document.body.appendChild(textarea);

    // Select the text within the textarea
    textarea.select();
    textarea.setSelectionRange(0, videoLink.length);

    try {
      // Copy the video link to the clipboard
      document.execCommand('copy');
      console.log('Video link copied to clipboard.');
    } catch (error) {
      console.log('Error copying video link:', error);
    }

    // Remove the textarea element from the DOM
    document.body.removeChild(textarea);

    // Show a prompt to inform the user that the video link has been copied
    alert(`${promptText}\n\nVideo link copied to clipboard.`);
  }
}

                </script>
                @empty
                <h3 class="text-white">No Video uploaded yet!</h3> @endforelse
        </div>
    </div>
    <div class="container">
    <div class="row m-3">
    </div>
    </div>
    </body>

</html>
