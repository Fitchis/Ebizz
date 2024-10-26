<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Education | eBizz</title>
    @vite('resources/js/app.js') 
    @vite('resources/css/style.css') 
    @vite('resources/css/app.css') 
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Roboto', sans-serif;
        }
        .card {
            border: none;
            border-radius: 15px;
            overflow: hidden;
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }
        .card-img-top {
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
            height: 200px;
            object-fit: cover;
        }
        .card-title {
            font-size: 1.25rem;
            color: #007bff;
        }
        .card-subtitle {
            font-size: 1rem;
            color: #6c757d;
        }
        .btn-custom {
            background-color: #007bff;
            color: white;
            border-radius: 20px;
            transition: background-color 0.3s, transform 0.3s;
        }
        .btn-custom:hover {
            background-color: #0056b3;
            transform: scale(1.05);
        }
        
    </style>
</head>
<body>
    @include('navbar')
    
    <div class="container mt-5 p-4">
        <h1 class="text-4xl text-center text-blue-700 font-bold mb-4 mt-10">Education Library</h1>
        <div class="row">
            @foreach($educations as $education)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ is_array($education) ? $education['image_url'] : $education->image_url }}" class="card-img-top" alt="{{ is_array($education) ? $education['title'] : $education->title }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ is_array($education) ? $education['title'] : $education->title }}</h5>
                            <h6 class="card-subtitle mb-2">{{ is_array($education) ? $education['category'] : $education->category }}</h6>
                            <p class="card-text">{{ is_array($education) ? $education['description'] : $education->description }}</p>
                            <a href="#" class="btn btn-custom text-white mt-2">View Details</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>