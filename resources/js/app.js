import './bootstrap';
import {createApp, h} from 'vue'
import {createInertiaApp, Head, Link} from '@inertiajs/vue3'

createInertiaApp({
    title: (title) => `OIPS ${title}`,
    resolve: name => {
        const pages = import.meta.glob('./Pages/**/*.vue', {eager: true})
        return pages[`./Pages/${name}.vue`]
    },
    setup({el, App, props, plugin}) {
        createApp({render: () => h(App, props)})
            .use(plugin)
            .component('Head', Head)
            .component('Link', Link)
            .mount(el)
    },
    progress: {
        color: 'white',
        showSpinner: true
    }
})
