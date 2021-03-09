<template>
    <div>
        <!-- Notification -->
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Notifications ({{ notifications.length}}) <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                
                <Notification
                    v-for="(notification, index) in notifications"
                    :key="index"
                    :notification="notification"
                ></Notification>
                
                <a class="dropdown-item" href="#" @click.prevent="markAllAsRead">
                    Clear Notifications
                </a>                
            </div>
        </li>
        <!-- End Notification -->
    </div>
</template>

<script>
export default {
    name: 'Notifications',
    mounted() {
       this.$store.dispatch('loadNotifications')
    },
    computed: {
        notifications () {
            return this.$store.state.notifications.items
        }
    },

    methods: {
        markAllAsRead () {
            this.$store.dispatch('markAllAsRead')
        }
    }
}
</script>