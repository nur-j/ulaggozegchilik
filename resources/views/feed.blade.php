<?=
'<?xml version="1.0" encoding="UTF-8"?>'.PHP_EOL
?>
<rss version="2.0">
    <channel>
        <title><![CDATA[ Ulaggözegçilik ]]></title>
        <link><![CDATA[ https://ulaggozegchilik.gov.tm/feed ]]></link>
        <description><![CDATA[ Täzelikler ]]></description>
        <language>en</language>
        <pubDate>{{ now()->toDayDateTimeString('Asia/Tashkent') }}</pubDate>

        @foreach($news as $post)
            <item>
                <title><![CDATA[{{ $post->title_tm }}]]></title>
                <link>{{ route('news.single', $post->id) }}</link>
                <description><![CDATA[{!! $post->description_tm !!}]]></description>
                <category>Habarlar</category>
                {{-- <author><![CDATA[{{ $user->name  }}]]></author> --}}
                <guid>{{ $post->id }}</guid>
                <pubDate>{{ $post->created_at->toRssString() }}</pubDate>
            </item>
        @endforeach
    </channel>
</rss>