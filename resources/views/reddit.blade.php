<html lang="en-US">
    <ul>
        @foreach($articles as $article)
            <li style="@if($loop->odd) background-color: #dadada; @endif">
                {{ $article['data']['title'] }}
            </li>
        @endforeach
    </ul>
</html>
