 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>@yield('title', 'Admin Dasboard')</title>
 @vite('resources/css/app.css')
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
 <style>
     .content-area {
         transition: all 0.3s ease;
     }

     .active {
         background-color: rgba(196, 138, 74, 0.1);
         color: #B57A4C;
         border-right: 3px solid #B57A4C;
     }

     .active i {
         color: #B57A4C;
     }

     .dropdown-content {
         max-height: 0;
         overflow: hidden;
         transition: max-height 0.3s ease;
     }

     .dropdown-content.open {
         max-height: 500px;
     }

     .dropdown-arrow {
         transition: transform 0.3s ease;
     }

     .dropdown-arrow.rotate-180 {
         transform: rotate(180deg);
     }

     @media (max-width: 768px) {
         .sidebar {
             transform: translateX(-100%);
             position: fixed;
             height: 100vh;
             z-index: 50;
         }

         .sidebar.mobile-open {
             transform: translateX(0);
         }

         .overlay {
             display: none;
             position: fixed;
             top: 0;
             left: 0;
             right: 0;
             bottom: 0;
             background-color: rgba(0, 0, 0, 0.5);
             z-index: 40;
         }

         .overlay.active {
             display: block;
         }
     }
 </style>
