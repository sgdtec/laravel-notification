import Echo from 'laravel-echo'

if (Laravel.user) {
    console.log('here')
    console.log(`App.Models.User.${Laravel.user}`)
    Echo.private(`App.Models.User.${Laravel.user}`)
        .notification(notification => {
            console.log(notification)
        })
}

