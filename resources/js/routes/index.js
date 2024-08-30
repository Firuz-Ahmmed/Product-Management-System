import { createMemoryHistory, createRouter } from 'vue-router'


const router = createRouter({
    history: createMemoryHistory(),
    routes:[
        {
            path: '/',
            component:()=>import("@/pages/Home.vue")
        },
    ]
})


export default router;
