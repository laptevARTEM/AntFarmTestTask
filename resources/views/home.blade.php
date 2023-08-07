<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link href="css/home.css" rel="stylesheet" type="text/css">
        <link href="css/font.css" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script type="text/javascript" src="{{ URL::asset('js/home.js') }}"></script>
        <meta name="csrf-token" content="{{ csrf_token() }}" />
    </head>
    <body>
        <div class="header">
            <div class="inner header-content">
                <div class="phone-block">
                    <span class="phone">+38 (044) 299 27 66</span>
                </div>
                <div class="logo-block">
                    <span class="hotel-logo">Hotel Logo</span>
                </div>
                <div class="book-block">
                    <button class="book-button">Забронювати</button>
                </div>
            </div>
        </div>
        <div class="content main-content">
            <div class="main-banner">
                <div class="main-banner-text-part">
                    <p class="main-banner-text main-banner-title-book">Забронюйте</p>
                    <p class="main-banner-text main-banner-title-place">Своє місце</p>
                </div>
                <div class="elips"></div>
                <div class="logo-block">
                    <span class="hotel-logo">в Hotel Logo</span>
                </div>
            </div>
            <div class="inputs-block">
                <div class="users-data-inputs">
                    <div class="input-block">
                        <input class="arrival-input input" id="arrival" type="date">
                        <label class="arrival-label label" for="arrival">Дата заїзду</label>
                    </div>
                    <div class="input-block">
                        <input class="departure-input input" id="departure" type="date">
                        <label class="departure-label label" for="departure">Дата виїзду</label>
                    </div>
                    <div class="input-block">
                        <input class="phone-input input" id="phone" type="tel">
                        <label class="phone-label label" for="phone">Номер телефону</label>
                    </div>
                    <div class="input-block">
                        <input class="email-input input" id="email" type="email">
                        <label class="email-label label" for="email">E-mail</label>
                    </div>
                </div>
                <div class="book-block">
                    <button class="book-button">Забронювати</button>
                </div>
            </div>
            <div class="second-banner">
                <div class="second-banner-text-part">
                    <p class="second-banner-text second-banner-title-history">Історія</p>
                    <p class="second-banner-text second-banner-title-book">Бронювань</p>
                </div>
                <div class="elips"></div>
                <div class="your-part-block">
                    <span class="your-part">ваших</span>
                </div>
            </div>
            <div class="books-table-block">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="arrival-date-header">Дата заїзду, з</th>
                            <th class="departure-date-header">Дата виїзду, до</th>
                            <th class="status-header">Статус</th>
                            <th class="remove-header">Видалити бронювання</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($books as $book)
                            <tr>
                                <td class="arrival-date">{{ $book->arrival_date }}</td>
                                <td class="departure-date">{{ $book->departure_date }}</td>
                                <td class="status">{{ $book->status }}</td>
                                <td class="remove">
                                    <svg data-id='{{ $book->id }}' xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path d="M18.3388 2.87829H14.1776V2.19984C14.1776 0.986842 13.1908 0 11.9778 0H8.0222C6.8092 0 5.82236 0.986842 5.82236 2.19984V2.87829H1.66118C1.35279 2.87829 1.10608 3.125 1.10608 3.43339C1.10608 3.74178 1.35279 3.98849 1.66118 3.98849H2.66447V17.0312C2.66447 18.6678 3.9967 20 5.63322 20H14.3668C16.0033 20 17.3355 18.6678 17.3355 17.0312V3.98849H18.3388C18.6472 3.98849 18.8939 3.74178 18.8939 3.43339C18.8939 3.125 18.6472 2.87829 18.3388 2.87829ZM6.93256 2.19984C6.93256 1.59951 7.42187 1.1102 8.0222 1.1102H11.9778C12.5781 1.1102 13.0674 1.59951 13.0674 2.19984V2.87829H6.93256V2.19984ZM16.2253 17.0312C16.2253 18.0551 15.3906 18.8898 14.3668 18.8898H5.63322C4.60937 18.8898 3.77466 18.0551 3.77466 17.0312V3.98849H16.2294V17.0312H16.2253Z" fill="#AE8B70"/>
                                    <path d="M9.99992 16.8996C10.3083 16.8996 10.555 16.6529 10.555 16.3445V6.53368C10.555 6.22529 10.3083 5.97858 9.99992 5.97858C9.69153 5.97858 9.44482 6.22529 9.44482 6.53368V16.3404C9.44482 16.6488 9.69153 16.8996 9.99992 16.8996Z" fill="#AE8B70"/>
                                    <path d="M6.37749 16.287C6.68587 16.287 6.93258 16.0403 6.93258 15.7319V7.14226C6.93258 6.83387 6.68587 6.58716 6.37749 6.58716C6.0691 6.58716 5.82239 6.83387 5.82239 7.14226V15.7319C5.82239 16.0403 6.07321 16.287 6.37749 16.287Z" fill="#AE8B70"/>
                                    <path d="M13.6225 16.287C13.9309 16.287 14.1776 16.0403 14.1776 15.7319V7.14226C14.1776 6.83387 13.9309 6.58716 13.6225 6.58716C13.3141 6.58716 13.0674 6.83387 13.0674 7.14226V15.7319C13.0674 16.0403 13.3141 16.287 13.6225 16.287Z" fill="#AE8B70"/>
                                    </svg>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="footer">
            <div class="footer-content">
                <div class="logo-block">
                    <span class="hotel-logo">Hotel Logo</span>
                </div>
                <div class="book-block">
                    <button class="book-button">Забронювати</button>
                </div>
                <div class="contacts-block">
                    <p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                        <g clip-path="url(#clip0_2_189)">
                        <path d="M13.6188 10.2746L11.6651 8.32084C10.9673 7.62308 9.78114 7.90221 9.50203 8.80928C9.2927 9.43729 8.59494 9.78617 7.96695 9.64659C6.57142 9.29771 4.68745 7.48352 4.33857 6.01822C4.12924 5.3902 4.5479 4.69244 5.17589 4.48314C6.08298 4.20403 6.36209 3.01783 5.66433 2.32007L3.71058 0.366326C3.15237 -0.122109 2.31505 -0.122109 1.82662 0.366326L0.500865 1.69208C-0.824889 3.08761 0.640418 6.78576 3.91991 10.0653C7.19941 13.3447 10.8976 14.8799 12.2931 13.4843L13.6188 12.1585C14.1073 11.6003 14.1073 10.763 13.6188 10.2746Z" fill="white"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_2_189">
                        <rect width="14" height="14" fill="white"/>
                        </clipPath>
                        </defs>
                        </svg>
                        <span>+38 (044) 299-27-66</span>
                    </p>
                    <p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                        <g clip-path="url(#clip0_2_189)">
                        <path d="M13.6188 10.2746L11.6651 8.32084C10.9673 7.62308 9.78114 7.90221 9.50203 8.80928C9.2927 9.43729 8.59494 9.78617 7.96695 9.64659C6.57142 9.29771 4.68745 7.48352 4.33857 6.01822C4.12924 5.3902 4.5479 4.69244 5.17589 4.48314C6.08298 4.20403 6.36209 3.01783 5.66433 2.32007L3.71058 0.366326C3.15237 -0.122109 2.31505 -0.122109 1.82662 0.366326L0.500865 1.69208C-0.824889 3.08761 0.640418 6.78576 3.91991 10.0653C7.19941 13.3447 10.8976 14.8799 12.2931 13.4843L13.6188 12.1585C14.1073 11.6003 14.1073 10.763 13.6188 10.2746Z" fill="white"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_2_189">
                        <rect width="14" height="14" fill="white"/>
                        </clipPath>
                        </defs>
                        </svg>
                        <span>+38 (044) 270-44-66</span>
                    </p>
                    <p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                        <g clip-path="url(#clip0_2_193)">
                        <path d="M7.17659 0.00291797C4.33348 -0.0928964 1.99866 2.18329 1.99866 5.00476C1.99866 8.20681 5.07153 10.5306 6.79388 13.8726C6.88132 14.0423 7.12559 14.0425 7.21333 13.8729C8.77144 10.8658 11.4345 8.84933 11.928 5.95233C12.439 2.95449 10.2159 0.105384 7.17659 0.00291797ZM7.00336 7.62626C5.55557 7.62626 4.38186 6.45252 4.38186 5.00476C4.38186 3.55699 5.55559 2.38326 7.00336 2.38326C8.45115 2.38326 9.62488 3.55699 9.62488 5.00476C9.62488 6.45252 8.45115 7.62626 7.00336 7.62626Z" fill="white"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_2_193">
                        <rect width="14" height="14" fill="white"/>
                        </clipPath>
                        </defs>
                        </svg>
                        <span>пр-т. В. Лобановського 25/16 Київ, Україна</span>
                    </p>
                </div>
            </div>
        </div>
    </body>
</html>
