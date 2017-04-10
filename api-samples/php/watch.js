$.ajax({
        method: 'GET',
        url: 'https://www.googleapis.com/youtube/v3/channels?',
        data: { 
        part : 'snippet',
        forUsername: channelName,
        key: '(AIzaSyDZeHP-XR1n32SUvp1pD8zhpWRS0hp66d4)'
        },
        dataType: 'jsonp'
})
