<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>

                <li class="{{ Route::is('admin.dashboard') ? 'active' : '' }}"> 
                    <a href="{{ route('admin.dashboard') }}">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.25 18C11.25 18.4142 11.5858 18.75 12 18.75C12.4142 18.75 12.75 18.4142 12.75 18V15C12.75 14.5858 12.4142 14.25 12 14.25C11.5858 14.25 11.25 14.5858 11.25 15V18Z" fill="#475467"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 1.25C11.2749 1.25 10.6134 1.44911 9.88928 1.7871C9.18832 2.11428 8.37772 2.59716 7.36183 3.20233L5.90622 4.06943C4.78711 4.73606 3.89535 5.26727 3.22015 5.77524C2.52314 6.29963 1.99999 6.8396 1.65907 7.55072C1.31799 8.26219 1.22554 9.0068 1.25519 9.87584C1.2839 10.717 1.43105 11.7397 1.61556 13.0219L1.90792 15.0537C2.14531 16.7036 2.33368 18.0128 2.61512 19.0322C2.90523 20.0829 3.31686 20.9169 4.05965 21.5565C4.80184 22.1956 5.68984 22.4814 6.77634 22.6177C7.83154 22.75 9.16281 22.75 10.8423 22.75H13.1577C14.8372 22.75 16.1685 22.75 17.2237 22.6177C18.3102 22.4814 19.1982 22.1956 19.9404 21.5565C20.6831 20.9169 21.0948 20.0829 21.3849 19.0322C21.6663 18.0129 21.8547 16.7036 22.0921 15.0537L22.3844 13.0219C22.569 11.7396 22.7161 10.717 22.7448 9.87584C22.7745 9.0068 22.682 8.26219 22.3409 7.55072C22 6.8396 21.4769 6.29963 20.7799 5.77524C20.1047 5.26727 19.2129 4.73606 18.0938 4.06943L16.6382 3.20233C15.6223 2.59716 14.8117 2.11428 14.1107 1.7871C13.3866 1.44911 12.7251 1.25 12 1.25ZM8.09558 4.51121C9.15309 3.88126 9.89923 3.43781 10.5237 3.14633C11.1328 2.86203 11.5708 2.75 12 2.75C12.4293 2.75 12.8672 2.86203 13.4763 3.14633C14.1008 3.43781 14.8469 3.88126 15.9044 4.51121L17.2893 5.33615C18.4536 6.02973 19.2752 6.52034 19.8781 6.9739C20.4665 7.41662 20.7888 7.78294 20.9883 8.19917C21.1877 8.61505 21.2706 9.09337 21.2457 9.82469C21.2201 10.5745 21.0856 11.5163 20.8936 12.8511L20.6148 14.7884C20.3683 16.5016 20.1921 17.7162 19.939 18.633C19.6916 19.5289 19.3939 20.0476 18.9616 20.4198C18.5287 20.7926 17.9676 21.0127 17.037 21.1294C16.086 21.2486 14.8488 21.25 13.1061 21.25H10.8939C9.15124 21.25 7.91405 21.2486 6.963 21.1294C6.03246 21.0127 5.47129 20.7926 5.03841 20.4198C4.60614 20.0476 4.30838 19.5289 4.06102 18.633C3.80791 17.7162 3.6317 16.5016 3.3852 14.7884L3.10643 12.851C2.91437 11.5163 2.77991 10.5745 2.75432 9.82469C2.72937 9.09337 2.81229 8.61505 3.01167 8.19917C3.21121 7.78294 3.53347 7.41662 4.12194 6.9739C4.72482 6.52034 5.54643 6.02973 6.71074 5.33615L8.09558 4.51121Z" fill="#475467"/>
                            </svg>
                            
                        <span>Dashboard</span>
                    </a>
                </li>
                {{-- <li class="{{ Route::is('admin.categories') ? 'active' : '' }}"> 
                    <a href="{{ route('admin.categories') }}">
                        <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M4 4h6v6h-6z"></path><path d="M14 4h6v6h-6z"></path><path d="M4 14h6v6h-6z"></path><path d="M17 17m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path></svg>
                        <span>Categories</span>
                    </a>
                </li> --}}
                {{-- <li class="{{ Route::is('admin.services') ? 'active' : '' }}"> 
                    <a href="{{ route('admin.services') }}">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14.0184 7.36446C14.1256 6.96436 13.8882 6.55311 13.4881 6.4459C13.088 6.3387 12.6767 6.57614 12.5695 6.97623L9.98131 16.6355C9.8741 17.0356 10.1115 17.4468 10.5116 17.5541C10.9117 17.6613 11.323 17.4238 11.4302 17.0237L14.0184 7.36446Z" fill="#475467"/>
                            <path d="M16.0303 8.46967C15.7374 8.17678 15.2626 8.17678 14.9697 8.46967C14.6768 8.76256 14.6768 9.23744 14.9697 9.53033L15.1412 9.7019C15.8229 10.3836 16.2797 10.8426 16.5753 11.2301C16.8577 11.6002 16.9216 11.8157 16.9216 12C16.9216 12.1843 16.8577 12.3998 16.5753 12.7699C16.2797 13.1574 15.8229 13.6164 15.1412 14.2981L14.9697 14.4697C14.6768 14.7626 14.6768 15.2374 14.9697 15.5303C15.2626 15.8232 15.7374 15.8232 16.0303 15.5303L16.2387 15.322C16.874 14.6867 17.4038 14.1569 17.7678 13.6798C18.1521 13.1762 18.4216 12.6441 18.4216 12C18.4216 11.3559 18.1521 10.8238 17.7678 10.3202C17.4038 9.84307 16.874 9.31331 16.2387 8.67801L16.0303 8.46967Z" fill="#475467"/>
                            <path d="M7.96986 8.46967C8.26275 8.17678 8.73762 8.17678 9.03052 8.46967C9.32341 8.76256 9.32341 9.23744 9.03052 9.53033L8.85894 9.7019C8.17729 10.3836 7.72052 10.8426 7.42488 11.2301C7.14245 11.6002 7.07861 11.8157 7.07861 12C7.07861 12.1843 7.14245 12.3998 7.42488 12.7699C7.72052 13.1574 8.17729 13.6164 8.85894 14.2981L9.03052 14.4697C9.32341 14.7626 9.32341 15.2374 9.03052 15.5303C8.73762 15.8232 8.26275 15.8232 7.96986 15.5303L7.76151 15.322C7.12618 14.6867 6.59637 14.1569 6.23235 13.6798C5.84811 13.1762 5.57861 12.6441 5.57861 12C5.57861 11.3559 5.84811 10.8238 6.23235 10.3202C6.59637 9.84307 7.12617 9.31332 7.7615 8.67802L7.96986 8.46967Z" fill="#475467"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M11.9426 1.25C9.63423 1.24999 7.82519 1.24998 6.41371 1.43975C4.96897 1.63399 3.82895 2.03933 2.93414 2.93414C2.03933 3.82895 1.63399 4.96897 1.43975 6.41371C1.24998 7.82519 1.24999 9.63423 1.25 11.9426V12.0574C1.24999 14.3658 1.24998 16.1748 1.43975 17.5863C1.63399 19.031 2.03933 20.1711 2.93414 21.0659C3.82895 21.9607 4.96897 22.366 6.41371 22.5603C7.82519 22.75 9.63423 22.75 11.9426 22.75H12.0574C14.3658 22.75 16.1748 22.75 17.5863 22.5603C19.031 22.366 20.1711 21.9607 21.0659 21.0659C21.9607 20.1711 22.366 19.031 22.5603 17.5863C22.75 16.1748 22.75 14.3658 22.75 12.0574V11.9426C22.75 9.63423 22.75 7.82519 22.5603 6.41371C22.366 4.96897 21.9607 3.82895 21.0659 2.93414C20.1711 2.03933 19.031 1.63399 17.5863 1.43975C16.1748 1.24998 14.3658 1.24999 12.0574 1.25H11.9426ZM3.9948 3.9948C4.56445 3.42514 5.33517 3.09825 6.61358 2.92637C7.91356 2.75159 9.62178 2.75 12 2.75C14.3782 2.75 16.0864 2.75159 17.3864 2.92637C18.6648 3.09825 19.4355 3.42514 20.0052 3.9948C20.5749 4.56445 20.9018 5.33517 21.0736 6.61358C21.2484 7.91356 21.25 9.62178 21.25 12C21.25 14.3782 21.2484 16.0864 21.0736 17.3864C20.9018 18.6648 20.5749 19.4355 20.0052 20.0052C19.4355 20.5749 18.6648 20.9018 17.3864 21.0736C16.0864 21.2484 14.3782 21.25 12 21.25C9.62178 21.25 7.91356 21.2484 6.61358 21.0736C5.33517 20.9018 4.56445 20.5749 3.9948 20.0052C3.42514 19.4355 3.09825 18.6648 2.92637 17.3864C2.75159 16.0864 2.75 14.3782 2.75 12C2.75 9.62178 2.75159 7.91356 2.92637 6.61358C3.09825 5.33517 3.42514 4.56445 3.9948 3.9948Z" fill="#475467"/>
                            </svg>
                            
                        <span>Services</span>
                    </a>
                </li> --}}

                <li class="{{ Route::is('contact.indexlisting') ? 'active' : '' }}"> 
                    <a href="{{ route('contact.indexlisting') }}">
                        <img src="{!! url('assets_admin/img/contact.svg') !!}" alt="">
                        {{-- <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M19 7H24V9H19V7ZM17 12H24V14H17V12ZM20 17H24V19H20V17ZM2 22C2 17.5817 5.58172 14 10 14C14.4183 14 18 17.5817 18 22H16C16 18.6863 13.3137 16 10 16C6.68629 16 4 18.6863 4 22H2ZM10 13C6.685 13 4 10.315 4 7C4 3.685 6.685 1 10 1C13.315 1 16 3.685 16 7C16 10.315 13.315 13 10 13ZM10 11C12.21 11 14 9.21 14 7C14 4.79 12.21 3 10 3C7.79 3 6 4.79 6 7C6 9.21 7.79 11 10 11Z"></path></svg> --}}
                        <span>Contacts</span>
                    </a>
                </li>
                
                <li class="{{ Route::is('ticket.index') ? 'active' : '' }}"> 
                    <a href="{{ route('ticket.index') }}">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M9.93994 3.25H14.06C15.9013 3.24998 17.3595 3.24997 18.5006 3.40311C19.6748 3.56068 20.6251 3.89264 21.3746 4.64075C22.4888 5.7529 22.6946 7.32752 22.7496 9.47524C22.7684 10.2115 22.1859 10.6634 21.699 10.7908C21.16 10.9317 20.7648 11.4214 20.7648 12C20.7648 12.5786 21.16 13.0683 21.699 13.2092C22.1859 13.3366 22.7684 13.7885 22.7496 14.5248C22.6946 16.6725 22.4888 18.2471 21.3746 19.3592C20.6251 20.1074 19.6748 20.4393 18.5006 20.5969C17.3595 20.75 15.9013 20.75 14.06 20.75H9.93995C8.09863 20.75 6.64046 20.75 5.49932 20.5969C4.32514 20.4393 3.37488 20.1074 2.62538 19.3592C1.51119 18.2471 1.30539 16.6725 1.25039 14.5248C1.23153 13.7885 1.81403 13.3366 2.30098 13.2092C2.83993 13.0683 3.23518 12.5786 3.23518 12C3.23518 11.4214 2.83994 10.9317 2.30098 10.7908C1.81403 10.6634 1.23153 10.2115 1.25039 9.47524C1.30539 7.32752 1.51119 5.7529 2.62538 4.64075C3.37488 3.89264 4.32514 3.56068 5.49932 3.40311C6.64046 3.24997 8.09863 3.24998 9.93994 3.25ZM5.69883 4.88978C4.69047 5.0251 4.1093 5.27894 3.68506 5.70239C3.05724 6.32906 2.81739 7.27767 2.75419 9.35995C3.89766 9.69337 4.73518 10.7475 4.73518 12C4.73518 13.2525 3.89766 14.3066 2.75419 14.6401C2.81739 16.7223 3.05724 17.6709 3.68506 18.2976C4.1093 18.7211 4.69047 18.9749 5.69883 19.1102C6.72862 19.2484 8.08601 19.25 9.99628 19.25H14.0037C15.9139 19.25 17.2713 19.2484 18.3011 19.1102C19.3095 18.9749 19.8906 18.7211 20.3149 18.2976C20.9427 17.6709 21.1826 16.7223 21.2458 14.6401C20.1023 14.3066 19.2648 13.2525 19.2648 12C19.2648 10.7475 20.1023 9.69337 21.2458 9.35995C21.1826 7.27767 20.9427 6.32906 20.3149 5.70239C19.8906 5.27894 19.3095 5.0251 18.3011 4.88978C17.2713 4.75159 15.9139 4.75 14.0037 4.75H9.99628C8.08601 4.75 6.72862 4.75159 5.69883 4.88978ZM12 10.0345C11.9418 10.1351 11.8772 10.251 11.801 10.3877L11.7027 10.564C11.6958 10.5765 11.6883 10.5901 11.6804 10.6047C11.6018 10.7483 11.4718 10.9861 11.2549 11.1507C11.0336 11.3188 10.7673 11.3766 10.6116 11.4104C10.596 11.4138 10.5815 11.4169 10.5683 11.4199L10.3773 11.4631C10.2022 11.5028 10.0595 11.5351 9.93748 11.5658C10.0168 11.6634 10.1199 11.7847 10.254 11.9415L10.3842 12.0937C10.3934 12.1045 10.4034 12.1161 10.4141 12.1284C10.5221 12.2527 10.6963 12.4535 10.7769 12.7126C10.8565 12.9687 10.8291 13.2324 10.8117 13.3988C10.81 13.4154 10.8084 13.431 10.807 13.4456L10.7873 13.6487C10.7691 13.8369 10.7549 13.9872 10.7454 14.1094C10.8496 14.0635 10.9682 14.0089 11.109 13.9441L11.2877 13.8618C11.3001 13.8561 11.3135 13.8498 11.3281 13.8429C11.4716 13.7752 11.7213 13.6575 12 13.6575C12.2786 13.6575 12.5283 13.7752 12.6718 13.8429C12.6864 13.8498 12.6999 13.8561 12.7122 13.8618L12.891 13.9441C13.0318 14.0089 13.1503 14.0635 13.2545 14.1094C13.2451 13.9872 13.2309 13.8369 13.2127 13.6487L13.193 13.4456C13.1916 13.4311 13.1899 13.4154 13.1882 13.3988C13.1709 13.2324 13.1434 12.9687 13.223 12.7126C13.3036 12.4535 13.4779 12.2527 13.5858 12.1284C13.5965 12.1161 13.6066 12.1045 13.6158 12.0937L13.7459 11.9415C13.88 11.7847 13.9831 11.6634 14.0625 11.5658C13.9405 11.5351 13.7978 11.5028 13.6226 11.4631L13.4317 11.4199C13.4185 11.4169 13.404 11.4138 13.3884 11.4104C13.2327 11.3766 12.9664 11.3188 12.745 11.1507C12.5282 10.9861 12.3981 10.7483 12.3196 10.6047C12.3116 10.5901 12.3042 10.5765 12.2972 10.564L12.1989 10.3877C12.1228 10.251 12.0581 10.1351 12 10.0345ZM11.0135 8.79963C11.1856 8.57481 11.4983 8.25 12 8.25C12.5017 8.25 12.8143 8.57481 12.9865 8.79963C13.1508 9.01421 13.3163 9.31124 13.486 9.61577C13.4937 9.62961 13.5014 9.64347 13.5091 9.65734L13.6074 9.83369C13.6302 9.87459 13.6482 9.90677 13.6639 9.9343C13.6912 9.94071 13.723 9.94792 13.7627 9.95691L13.9536 10.0001C13.9693 10.0036 13.9849 10.0072 14.0005 10.0107C14.3283 10.0848 14.6541 10.1584 14.9042 10.2569C15.1804 10.3658 15.5547 10.5777 15.6989 11.0416C15.8406 11.4973 15.6618 11.8834 15.5056 12.1315C15.3611 12.3611 15.1414 12.6179 14.9165 12.8807C14.9063 12.8926 14.8961 12.9045 14.8859 12.9164L14.7558 13.0686C14.7213 13.1089 14.6953 13.1394 14.6734 13.1657C14.6764 13.202 14.6805 13.2443 14.686 13.3009L14.7057 13.504C14.7072 13.5195 14.7087 13.5349 14.7102 13.5504C14.7443 13.9023 14.7774 14.2424 14.7653 14.5145C14.7525 14.7997 14.6841 15.2315 14.2969 15.5254C13.8975 15.8286 13.4564 15.7626 13.1767 15.6824C12.9189 15.6086 12.6144 15.4682 12.3077 15.3269C12.293 15.3201 12.2783 15.3134 12.2636 15.3066L12.0849 15.2243C12.0514 15.2089 12.0239 15.1963 12 15.1854C11.976 15.1963 11.9485 15.2089 11.9151 15.2243L11.7364 15.3066C11.7217 15.3134 11.707 15.3201 11.6923 15.3269C11.3856 15.4682 11.081 15.6086 10.8233 15.6824C10.5436 15.7626 10.1024 15.8286 9.70304 15.5254C9.31587 15.2315 9.24741 14.7997 9.2347 14.5145C9.22258 14.2424 9.25561 13.9023 9.28979 13.5504C9.29129 13.5349 9.29279 13.5195 9.29429 13.504L9.31397 13.3009C9.31945 13.2443 9.32354 13.202 9.32652 13.1657C9.30463 13.1394 9.27864 13.1089 9.24415 13.0686L9.11401 12.9164C9.10383 12.9045 9.09365 12.8926 9.08348 12.8807C8.85857 12.6179 8.63888 12.3611 8.49434 12.1315C8.33815 11.8834 8.15931 11.4973 8.30103 11.0416C8.44529 10.5777 8.8196 10.3658 9.09574 10.2569C9.34582 10.1584 9.67161 10.0848 9.99943 10.0107C10.0151 10.0072 10.0307 10.0036 10.0463 10.0001L10.2372 9.95691C10.277 9.94792 10.3087 9.94071 10.3361 9.9343C10.3518 9.90677 10.3697 9.87459 10.3925 9.83369L10.4908 9.65734C10.4986 9.64347 10.5063 9.62961 10.514 9.61576C10.6837 9.31124 10.8491 9.01421 11.0135 8.79963Z" fill="#475467"/>
                            </svg>
                            
                        <span>Tickets</span>
                    </a>
                </li>
                <li class="{{ Route::is('order.index') ? 'active' : '' }}"> 
                    <a href="{{ route('order.index') }}">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path fill="none" stroke-width="2" d="M18,4 L18,0 L18,4 Z M7,18 L5,18 L7,18 Z M19,18 L9,18 L19,18 Z M7,14 L5,14 L7,14 Z M19,14 L9,14 L19,14 Z M6,4 L6,0 L6,4 Z M1,9 L23,9 L1,9 Z M1,23 L23,23 L23,4 L1,4 L1,23 Z"></path></svg>
                        <span>Orders</span>
                    </a>
                </li>
                <li class="{{ Route::is('plan.index') ? 'active' : '' }}"> 
                    <a href="{{ route('plan.index') }}">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path fill="none" stroke-width="2" d="M18,4 L18,0 L18,4 Z M7,18 L5,18 L7,18 Z M19,18 L9,18 L19,18 Z M7,14 L5,14 L7,14 Z M19,14 L9,14 L19,14 Z M6,4 L6,0 L6,4 Z M1,9 L23,9 L1,9 Z M1,23 L23,23 L23,4 L1,4 L1,23 Z"></path></svg>
                        <span>Plans</span>
                    </a>
                </li>
                <li class="{{ Route::is('emergency_page') ? 'active' : '' }}"> 
                    <a href="{{ route('emergency_page') }}">
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path fill="none" stroke-width="2" d="M18,4 L18,0 L18,4 Z M7,18 L5,18 L7,18 Z M19,18 L9,18 L19,18 Z M7,14 L5,14 L7,14 Z M19,14 L9,14 L19,14 Z M6,4 L6,0 L6,4 Z M1,9 L23,9 L1,9 Z M1,23 L23,23 L23,4 L1,4 L1,23 Z"></path></svg>
                        <span>Emergency</span>
                    </a>
                </li>
                <li class="{{ Route::is('users.index') ? 'active' : '' }}"> 
                    <a href="{{ route('users.index') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 25 24" fill="none">
                            <g clip-path="url(#clip0_4779_106)">
                                <path d="M17.5 21V19C17.5 17.9391 17.0786 16.9217 16.3284 16.1716C15.5783 15.4214 14.5609 15 13.5 15H5.5C4.43913 15 3.42172 15.4214 2.67157 16.1716C1.92143 16.9217 1.5 17.9391 1.5 19V21" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M9.5 11C11.7091 11 13.5 9.20914 13.5 7C13.5 4.79086 11.7091 3 9.5 3C7.29086 3 5.5 4.79086 5.5 7C5.5 9.20914 7.29086 11 9.5 11Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M23.5 21V19C23.4993 18.1137 23.2044 17.2528 22.6614 16.5523C22.1184 15.8519 21.3581 15.3516 20.5 15.13" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M16.5 3.13C17.3604 3.35031 18.123 3.85071 18.6676 4.55232C19.2122 5.25392 19.5078 6.11683 19.5078 7.005C19.5078 7.89318 19.2122 8.75608 18.6676 9.45769C18.123 10.1593 17.3604 10.6597 16.5 10.88" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </g>
                            <defs>
                                <clipPath id="clip0_4779_106">
                                    <rect width="24" height="24" fill="white" transform="translate(0.5)"/>
                                </clipPath>
                            </defs>
                        </svg>
                        <span>Users</span>
                    </a>
                </li>
                {{-- <li class="{{ Route::is('roles.index') ? 'active' : '' }}"> 
                    <a href="{{ route('roles.index') }}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 25 24" fill="none">
                            <g clip-path="url(#clip0_4779_106)">
                                <path d="M17.5 21V19C17.5 17.9391 17.0786 16.9217 16.3284 16.1716C15.5783 15.4214 14.5609 15 13.5 15H5.5C4.43913 15 3.42172 15.4214 2.67157 16.1716C1.92143 16.9217 1.5 17.9391 1.5 19V21" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M9.5 11C11.7091 11 13.5 9.20914 13.5 7C13.5 4.79086 11.7091 3 9.5 3C7.29086 3 5.5 4.79086 5.5 7C5.5 9.20914 7.29086 11 9.5 11Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M23.5 21V19C23.4993 18.1137 23.2044 17.2528 22.6614 16.5523C22.1184 15.8519 21.3581 15.3516 20.5 15.13" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M16.5 3.13C17.3604 3.35031 18.123 3.85071 18.6676 4.55232C19.2122 5.25392 19.5078 6.11683 19.5078 7.005C19.5078 7.89318 19.2122 8.75608 18.6676 9.45769C18.123 10.1593 17.3604 10.6597 16.5 10.88" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </g>
                            <defs>
                                <clipPath id="clip0_4779_106">
                                    <rect width="24" height="24" fill="white" transform="translate(0.5)"/>
                                </clipPath>
                            </defs>
                        </svg>
                        <span>Roles</span>
                    </a>
                </li> --}}
                
                
                
                

                <li class=""> 
                    <a href="#" class="signout" ><img src="{!!url('assets/img/sidebaricons/Logout.svg')!!}" class="img-fluid" width="26" /> <span>Logout</span></a>
                </li>


            </ul>
        </div>
    </div>
</div>
<!-- /Sidebar