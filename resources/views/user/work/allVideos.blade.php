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

        .video-wrapper {
    position: relative;
    cursor: pointer;
}

.video-thumbnail {
    width: 100%;
    height: 200px;
    object-fit: cover;
}

.video-player {
    display: none;
    width: 100%;
    height: 200px;
    object-fit: cover;
}

.play-icon {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 60px;
    height: 60px;
    background: rgba(0,0,0,0.7);
    color: #fff;
    font-size: 28px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.star {
    color: white;
    font-size: 20px;
    cursor: pointer;
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
    <div class="card video-card" style="width: 18rem; background-color: blue;">

        <div class="video-wrapper" onclick="toggleVideo(this)">
            <img class="video-thumbnail"
                 src="{{ asset('assets/chocolate.jpeg') }}"
                 alt="Video Thumbnail">

            <div class="play-icon">▶</div>

            <video class="video-player">
                <source src="{{ asset('video/' . $video->link) }}" type="video/mp4">
            </video>
        </div>

        <div class="card-body">
            <h5 class="card-title text-white">Watch&Get</h5>
            <p class="card-text text-white">{{ $video->text }}</p>

            <div>
                <span class="star" onclick="toggleStar(this)">★</span>
                <span class="star" onclick="toggleStar(this)">★</span>
                <span class="star" onclick="toggleStar(this)">★</span>
                <span class="star" onclick="toggleStar(this)">★</span>
                <span class="star" onclick="toggleStar(this)">★</span>
            </div>

            <div class="d-flex justify-content-around align-items-center mt-2">
                <a href="{{ route('User.Type.Task', ['id' => $video->id]) }}" class="btn btn-primary">Submit</a>
                <button class="btn btn-sm btn-info text-white">Share Now</button>
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

    <script>
        function toggleVideo(wrapper) {
            const video = wrapper.querySelector('.video-player');
            const thumbnail = wrapper.querySelector('.video-thumbnail');
            const playIcon = wrapper.querySelector('.play-icon');

            if (video.paused) {
                video.style.display = 'block';
                thumbnail.style.display = 'none';
                playIcon.style.display = 'none';
                video.play();
            } else {
                video.pause();
                video.style.display = 'none';
                thumbnail.style.display = 'block';
                playIcon.style.display = 'flex';
            }
        }

        function toggleStar(star) {
            star.style.color = (star.style.color === 'gold') ? 'white' : 'gold';
        }
    </script>

    </body>

</html>
