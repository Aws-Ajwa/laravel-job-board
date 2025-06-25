<div>
    Waste no more time arguing what a good man should be, be one. - Marcus Aurelius
    <h1>Job Board</h1>
    @foreach ($jobs as $job)
        <div>{{ $job['title'] }}: {{ $job['salary'] }}</div>
    @endforeach

</div>

