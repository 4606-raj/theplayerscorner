{{-- <style>
    .row-bl, .txt-bl{
        color: #2d2525;
        font-size: 1rem;
        font-family: "Open Sans", sans-serif;
    }
    a{
        font-family: "Open Sans", sans-serif;
        color: #0549ce;
    }
    .row-bl{
        margin: 10px 0;
    }
    .row-bl h3{
        margin: 0;
        font-size: .9rem;
        font-weight: 600;
        padding: 10px 15px;
    }
    .row-bl span{
        font-weight: 400 !important;
        margin: 0;
        font-size: 1.1rem !important;
    }
    .txt-bl{
        line-height: 25px;
        border: 1px solid #d4dbe1;
        border-radius: 4px;
        padding: 0 15px;
    }
    .social-icons{
        width: 30%;
        margin-left: 35%;
    }
    .social-icons ul{
        padding: 0;
        margin: 25px 0;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .social-icons ul li{
        list-style: none;
    }
    .site-sign{
        display: flex;
        align-items: center;
    }
    .site-sign svg{
        margin-right: 10px;
    }
    @media screen and (max-width: 575.98px){
        .social-icons{
            width: 90%;
            margin-left: 5%;
        }

    }
</style>

<section>
    

    <div class="txt-bl">
        <p>
            This is an automated email to confirm that we have received your enquiry and we will be contacting you in due course.
            Please remember to add us to your safe list. So, you do not miss out on any vital communication from us.
            In the meantime, please feel free to enjoy our successes both on and off the field by having a look through our online presence:
        </p>

        <div class="social-icons">
            <ul>
                <li><a href="https://www.facebook.com/SouthallAthletic/" target="_blank">
                    <img src="{{ $message->embed(asset('assets/ images/fb-i.png')) }}" alt="Facebook icon">
                </li>
                <li><a href="https://www.instagram.com/southall_athletic/?hl=en" target="_blank">
                    <svg width="30" height="30" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path class="hover-i" fill-rule="evenodd" clip-rule="evenodd" d="M6.465 0.066C7.638 0.012 8.012 0 11 0C13.988 0 14.362 0.013 15.534 0.066C16.706 0.119 17.506 0.306 18.206 0.577C18.939 0.854 19.604 1.287 20.154 1.847C20.714 2.396 21.146 3.06 21.422 3.794C21.694 4.494 21.88 5.294 21.934 6.464C21.988 7.639 22 8.013 22 11C22 13.988 21.987 14.362 21.934 15.535C21.881 16.705 21.694 17.505 21.422 18.205C21.146 18.9391 20.7133 19.6042 20.154 20.154C19.604 20.714 18.939 21.146 18.206 21.422C17.506 21.694 16.706 21.88 15.536 21.934C14.362 21.988 13.988 22 11 22C8.012 22 7.638 21.987 6.465 21.934C5.295 21.881 4.495 21.694 3.795 21.422C3.06092 21.146 2.39582 20.7133 1.846 20.154C1.28638 19.6047 0.853315 18.9399 0.577 18.206C0.306 17.506 0.12 16.706 0.066 15.536C0.012 14.361 0 13.987 0 11C0 8.012 0.013 7.638 0.066 6.466C0.119 5.294 0.306 4.494 0.577 3.794C0.853723 3.06008 1.28712 2.39531 1.847 1.846C2.39604 1.2865 3.06047 0.853443 3.794 0.577C4.494 0.306 5.294 0.12 6.464 0.066H6.465ZM15.445 2.046C14.285 1.993 13.937 1.982 11 1.982C8.063 1.982 7.715 1.993 6.555 2.046C5.482 2.095 4.9 2.274 4.512 2.425C3.999 2.625 3.632 2.862 3.247 3.247C2.88205 3.60205 2.60118 4.03428 2.425 4.512C2.274 4.9 2.095 5.482 2.046 6.555C1.993 7.715 1.982 8.063 1.982 11C1.982 13.937 1.993 14.285 2.046 15.445C2.095 16.518 2.274 17.1 2.425 17.488C2.601 17.965 2.882 18.398 3.247 18.753C3.602 19.118 4.035 19.399 4.512 19.575C4.9 19.726 5.482 19.905 6.555 19.954C7.715 20.007 8.062 20.018 11 20.018C13.938 20.018 14.285 20.007 15.445 19.954C16.518 19.905 17.1 19.726 17.488 19.575C18.001 19.375 18.368 19.138 18.753 18.753C19.118 18.398 19.399 17.965 19.575 17.488C19.726 17.1 19.905 16.518 19.954 15.445C20.007 14.285 20.018 13.937 20.018 11C20.018 8.063 20.007 7.715 19.954 6.555C19.905 5.482 19.726 4.9 19.575 4.512C19.375 3.999 19.138 3.632 18.753 3.247C18.3979 2.88207 17.9657 2.60121 17.488 2.425C17.1 2.274 16.518 2.095 15.445 2.046V2.046ZM9.595 14.391C10.3797 14.7176 11.2534 14.7617 12.0669 14.5157C12.8805 14.2697 13.5834 13.7489 14.0556 13.0422C14.5278 12.3356 14.7401 11.4869 14.656 10.6411C14.572 9.79534 14.197 9.00497 13.595 8.405C13.2112 8.02148 12.7472 7.72781 12.2363 7.54515C11.7255 7.36248 11.1804 7.29536 10.6405 7.34862C10.1006 7.40187 9.57915 7.57418 9.1138 7.85313C8.64846 8.13208 8.25074 8.51074 7.9493 8.96185C7.64786 9.41296 7.45019 9.92529 7.37052 10.462C7.29084 10.9986 7.33115 11.5463 7.48854 12.0655C7.64593 12.5847 7.91648 13.0626 8.28072 13.4647C8.64496 13.8668 9.09382 14.1832 9.595 14.391ZM7.002 7.002C7.52702 6.47698 8.15032 6.0605 8.8363 5.77636C9.52228 5.49222 10.2575 5.34597 11 5.34597C11.7425 5.34597 12.4777 5.49222 13.1637 5.77636C13.8497 6.0605 14.473 6.47698 14.998 7.002C15.523 7.52702 15.9395 8.15032 16.2236 8.8363C16.5078 9.52228 16.654 10.2575 16.654 11C16.654 11.7425 16.5078 12.4777 16.2236 13.1637C15.9395 13.8497 15.523 14.473 14.998 14.998C13.9377 16.0583 12.4995 16.654 11 16.654C9.50046 16.654 8.06234 16.0583 7.002 14.998C5.94166 13.9377 5.34597 12.4995 5.34597 11C5.34597 9.50046 5.94166 8.06234 7.002 7.002V7.002ZM17.908 6.188C18.0381 6.06527 18.1423 5.91768 18.2143 5.75397C18.2863 5.59027 18.3248 5.41377 18.3274 5.23493C18.33 5.05609 18.2967 4.87855 18.2295 4.71281C18.1622 4.54707 18.0624 4.39651 17.936 4.27004C17.8095 4.14357 17.6589 4.04376 17.4932 3.97652C17.3275 3.90928 17.1499 3.87598 16.9711 3.87858C16.7922 3.88119 16.6157 3.91965 16.452 3.9917C16.2883 4.06374 16.1407 4.1679 16.018 4.298C15.7793 4.55103 15.6486 4.88712 15.6537 5.23493C15.6588 5.58274 15.7992 5.91488 16.0452 6.16084C16.2911 6.40681 16.6233 6.54723 16.9711 6.5523C17.3189 6.55737 17.655 6.42669 17.908 6.188V6.188Z" fill="#0549ce"/>
                    </svg></a>
                </li>
                <li><a href="https://www.linkedin.com/company/southall-afc/" target="_blank">
                    <svg width="30" height="30" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path class="hover-i" fill-rule="evenodd" clip-rule="evenodd" d="M2.7206e-07 1.838C2.7206e-07 1.35053 0.193646 0.883032 0.538338 0.53834C0.88303 0.193648 1.35053 2.45031e-06 1.838 2.45031e-06H20.16C20.4016 -0.000392101 20.6409 0.0468654 20.8641 0.139069C21.0874 0.231273 21.2903 0.366612 21.4612 0.537339C21.6322 0.708065 21.7677 0.910826 21.8602 1.13401C21.9526 1.3572 22.0001 1.59643 22 1.838V20.16C22.0003 20.4016 21.9529 20.6409 21.8606 20.8642C21.7683 21.0875 21.6328 21.2904 21.462 21.4613C21.2912 21.6322 21.0884 21.7678 20.8651 21.8602C20.6419 21.9526 20.4026 22.0001 20.161 22H1.838C1.59655 22 1.35746 21.9524 1.1344 21.86C0.911335 21.7676 0.708671 21.6321 0.537984 21.4613C0.367297 21.2905 0.231932 21.0878 0.139623 20.8647C0.0473133 20.6416 -0.000131096 20.4025 2.7206e-07 20.161V1.838ZM8.708 8.388H11.687V9.884C12.117 9.024 13.217 8.25 14.87 8.25C18.039 8.25 18.79 9.963 18.79 13.106V18.928H15.583V13.822C15.583 12.032 15.153 11.022 14.061 11.022C12.546 11.022 11.916 12.111 11.916 13.822V18.928H8.708V8.388ZM3.208 18.791H6.416V8.25H3.208V18.79V18.791ZM6.875 4.812C6.88105 5.08667 6.83217 5.35979 6.73124 5.61532C6.63031 5.87084 6.47935 6.10364 6.28723 6.30003C6.09511 6.49643 5.8657 6.65248 5.61246 6.75901C5.35921 6.86554 5.08724 6.92042 4.8125 6.92042C4.53776 6.92042 4.26579 6.86554 4.01255 6.75901C3.7593 6.65248 3.52989 6.49643 3.33777 6.30003C3.14565 6.10364 2.99469 5.87084 2.89376 5.61532C2.79283 5.35979 2.74395 5.08667 2.75 4.812C2.76187 4.27286 2.98439 3.75979 3.36989 3.38269C3.75539 3.00558 4.27322 2.79442 4.8125 2.79442C5.35178 2.79442 5.86961 3.00558 6.25512 3.38269C6.64062 3.75979 6.86313 4.27286 6.875 4.812V4.812Z" fill="#0549ce"/>
                    </svg></a>
                </li>
                <li><a href="https://twitter.com/southall_afc" target="_blank">
                    <svg width="31" height="27" viewBox="0 0 23 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path class="hover-i" d="M22.706 2.18952C21.871 2.55952 20.974 2.80952 20.031 2.92252C21.004 2.34031 21.7319 1.42398 22.079 0.344518C21.1648 0.887508 20.1643 1.26971 19.121 1.47452C18.4194 0.725384 17.4901 0.228845 16.4773 0.0619924C15.4646 -0.10486 14.4251 0.0673099 13.5202 0.551771C12.6154 1.03623 11.8958 1.80588 11.4732 2.74122C11.0505 3.67656 10.9485 4.72527 11.183 5.72452C9.33069 5.63151 7.51863 5.15007 5.86442 4.31142C4.21022 3.47278 2.75084 2.29568 1.581 0.856519C1.181 1.54652 0.951 2.34652 0.951 3.19852C0.950554 3.96551 1.13943 4.72076 1.50088 5.39725C1.86232 6.07374 2.38516 6.65056 3.023 7.07652C2.28328 7.05298 1.55987 6.8531 0.913 6.49352V6.55352C0.912925 7.62926 1.28503 8.6719 1.96618 9.50451C2.64733 10.3371 3.59557 10.9084 4.65 11.1215C3.96378 11.3072 3.24434 11.3346 2.546 11.2015C2.8435 12.1271 3.423 12.9365 4.20337 13.5164C4.98374 14.0963 5.92592 14.4177 6.898 14.4355C5.24783 15.7309 3.20989 16.4336 1.112 16.4305C0.740381 16.4306 0.369076 16.4089 0 16.3655C2.12948 17.7347 4.60834 18.4613 7.14 18.4585C15.71 18.4585 20.395 11.3605 20.395 5.20452C20.395 5.00452 20.39 4.80252 20.381 4.60252C21.2923 3.94349 22.0789 3.12741 22.704 2.19252L22.706 2.18952V2.18952Z" fill="#0549ce"/>
                    </svg></a>
                </li>
                <li><a href="https://www.youtube.com/channel/UC5puOkk0k-yIfngkssGtzWA" target="_blank">
                    <svg width="33" height="25" viewBox="0 0 25 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path class="hover-i" d="M23.5006 2.51196C23.3647 2.02719 23.1 1.5883 22.7346 1.24196C22.3589 0.884962 21.8984 0.629595 21.3966 0.499959C19.5186 0.00495878 11.9946 0.00495889 11.9946 0.00495889C8.85795 -0.0307285 5.72205 0.126233 2.60462 0.474959C2.10281 0.614172 1.64318 0.875246 1.26662 1.23496C0.896617 1.59096 0.628617 2.02996 0.488617 2.51096C0.15231 4.3227 -0.0110908 6.1623 0.000617183 8.00496C-0.0113828 9.84596 0.151617 11.685 0.488617 13.499C0.625617 13.978 0.892617 14.415 1.26362 14.768C1.63462 15.121 2.09662 15.376 2.60462 15.511C4.50762 16.005 11.9946 16.005 11.9946 16.005C15.1353 16.0407 18.2752 15.8837 21.3966 15.535C21.8984 15.4053 22.3589 15.15 22.7346 14.793C23.0999 14.4467 23.3643 14.0077 23.4996 13.523C23.8447 11.7119 24.0125 9.87155 24.0006 8.02796C24.0266 6.17656 23.859 4.32752 23.5006 2.51096V2.51196ZM9.60262 11.429V4.58196L15.8626 8.00596L9.60262 11.429Z" fill="#0549ce"/>
                    </svg></a>
                </li>
            </ul>
        </div>
        <p>
            If for any reason you have the need to contact us, then please email us at: <a href="mailto: info@southallathleticfc.com">info@southallathleticfc.com</a> <br>
            Regards,
        </p>
        <p class="site-sign">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40px" height="42px">
            <image  x="0px" y="0px" width="40px" height="42px"  xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAABkCAYAAADE6GNbAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAABmJLR0QA/wD/AP+gvaeTAAAAB3RJTUUH5ggYEAsVOxv43gAAESdJREFUeNrVnGmQXNV1x3/3vqX3WRACLaMVCSFhIRRIIKwRm41xYQfKVY7tKqvALpeXchDYZQTGSRkkQRxjCNj+kFSciitVlINjG7DYJAUQm20E1sgiQiCB0DBamJFmpqe31+/dmw/3dfeMpqf7zXTj5VSd0vR77953z/2fc+85554n4axcT1tI2CBdQAMivKjASi1ByB5KR59BWCc00qCVeb77XHA6wt9TJ9keKQDtgw5qA0SD8iG1aB1dq3+AVhIdMJ51217fPkHQoDwICob9HAinh+S8zxCbuYLYzI9QzkJQNKz89r26vYIIQIUDLYCfhdTCdVjJTlDQ+aH1CCkMWoC0WnrbByhI2J10jJ47XT1klt2I9s3sx+deRGLeh1FlY09tfvWE3rzejXi9G6fZnQZhGd3PLL8JO9VZNV4hoGvl7QibiUbfOgln5XobUF7vxuktFyeQe9Z6B+nOY9Y1r2LFOsetQsKCo1uuoXj4KW/XP00wEvfKbS2tWoqq4rYqxG2CoOiTXvqVcWhUBRGQWbEe5ZtnT6SgVFsMpsiibfsI2gzEis9hzid2Y8W66s6usOHQY2vI9z2DkzEoBQW83feayTjvh9N6u90eGQKzjygPuv9iHXaqC+XVf1YI6Fr1D+TffQZ/FKxEVQgAkgtMX1Ok1hHRoWbqAOzUPGZ97PdYbkdDXTeoXEHuwFakC24X3s7vVG+7Vz475WG0gIiuCYEwgmSWrcNOdkyKRlUQAZ2rbid/cCsoKA/jnnkL3u7vmfv5d6Zs9NMURI1xL0IhnI55pJfeGGnHVmVI9qwhOe8Kcm9vQbjgZqq3vRc+h3vZ41Ma0RR3pVCFTpytChpWssMsghFISOg6+zacTnDSgMY96/aJ/Ubk6DaiVR24RcU2epjzsd0IN4IgovavkDC4/cMUjz6FALxR0GW81+8HwL3gx5GnOIJqhbagdW0MY0n5NTSa2QYC0B6qPAhIhC1JLlhLvm8LoLDiINO1x1MLI9tKA0S0GfxkAoBBw0r1MPtju5ER0BAShnu/iBYPISzL+Jlli+Fdg6hAIyyQEpRfNXz3kv9uERFhgRgbJNVDQ0PH8pujrVQWeMff5PiO/yC9zMPtGqOuwrxGYH6LMe9UpUhxS2NBGgmBArd7PunTPh9pAxMSRt+6H+F6lIfA6TTXEOHgbbATlYerzbznP4t7xZYWBFFB45hB+dBx2s1YiQyq3ByN8kgf+QM/QUgojxi2E8YbcDrASgIavGOgirhn3oS3+z7TvtDfgiAoYBJBtAI7M5/Uohtq4W0zNPb/CK1GsNMgYxDkDAPYtT0EpxvKxxhnb3aqqdE33kfUJIPUAaRPW4eVyDRdVYQEPzdA9vV/RZdNgkLY1IxCUI3x0cY+nA6QCdyzvgWA9+z14HQ15CbLbx1UtJ4aGkjIvnEvwnofpzvso4Eq6sC00b5Rvwrl3wUmf1+EDVGCHCOvKkPXqnvpWLGuqW2EQyN34Mdo/whCyIaRjxASP99H/t1/QQgI8qB9vN5NALiXPDxp0wgbYkV1wuSCk5lPatGN0dAIG6ZPu6GqQQ2fDFcwf3gH3tALyDgEo2NGm2Ky90bwtbQZgJUA4UJ62S3IRMeUvNNKAkI3YVU2Q0otXm+WdA2Bh7v8qwB4266Gwnt1OQIiArQH2gU7vYDkvBugvTmpCUInZl+NnTkfb/BlrBhYsdr9xNy6K5jQTXZNE1trQGhO+sv7SS/9WkTbmD5JB3IHHmVg+7UIKbzejeMG6V753IQmUeIRgVYxnM5FJOZFXKlaJOVDYu41xGZcTun954FSVYhz/7mutU1Ytbzejbhn3Rb+0lSTbl2rvk966U0fOBoVMqg8wsDzHzeuTJgzE/XnvvHyK12QcbAzyzn5wteRdnsSzzogwhIGAsWRrX9NafA3Zu+0jFdQhyZXLekYI9MBWPZCCu/9Gzpo1co1QsaJz/kMQrqNhdEgHEl66a0UD18HDqCYTCMa24gqmQ7Lxx/HLzzeeh5PgHcculenSS/5ZFM1VT4k51+LO/NcvIFXwDYraL15rz8ZY7IjCPOYsNvAluk398796CDCrGiQtkXHGetrkyjqspzQUNjgngQyQc2ZawcJ8IbMLBcPv0Dh0LPjXJ/GqHwc9+Rzq5tkHR4viBDGr3K7jTDOSSBibRBGhIdAo7WMZHbvfdHaVlBZvt4Yu1OX7aoAlUZQUy0ZA9eteaQtyAF2GHeEu7I/tJnS4C7ck1Y23ZuUD8l511J4dzXlkdfqjUWOi4/rzQaE+i2mzwgzKbGZYKdNf5oy+XceMHtEBFSEY5NcdGtt6W6kWs0EaonCl1ppszepImTffAhv+GCkgx/tQ2LOdThdq+vZimWdevH4BsIy7nLbjLyOQDJmkFFFD7BIzLkqkjctHImQ3RQPPVxLjhi2x2dKNCATSHcBWn1QkhiSNiR6QHmvEBSyCCfTdPIqqOT2nU155HdjkbTHbfnKh8wZm0gv/TLa/2AFqVHQfJevSgLSsUku/CbHXv47s3yLUJAKIiYzsojUoi8ghNOuM6BoNIU5Uz4ke64j27mS8tCuyiZbM3YdQHrRLVjxZG1n/0PxFIWWrktm2TdrdlXZ2bUCO72I5Py1k6aA/pTI7PafxJ2xspJylePRSKQin2/8UamCyulVVGSIxkKSC/480KhQBRUncyZBAVOxk/pzQqNCGmTMJb3sGwQeEju9kNSCtX+QWLzdpMqQXvwpYjOWS9JL1iMT6SnkqfzJ4ua2kNnkIkaiGmQsRudZd9hYsXmRsoCVlxQPv0JQ+DLp06y6B6PTFiAM3nJvB0j3h8RnnR9NSzRIN2aTfWMTiblXR5sABe6MVRx5ukDxyB66VxsHcBqVCuOFsI0TefxlKA8v45TLV0WbIAGq7JPbv0HiHdtO4dCT0dRFgxVL0HHGHeT2wcDz4A2Y4Kbh6VaDgUgHvEF4fzuM7oX0kjuwYolIKiJsKB76BX72VcvqXglBro/M0rXRUNFgZ07HG/wZ5ZEBiv3mmntSGLcQMU6xAAXZN2B4l6m6i5+6jK5VD6B1tFQugc/wrs+hSocs65QLwc++Q/yUS3G7F0WC1HJttHIpHHwUtDkaKx4xB/86MGqiSg3YA38IBkIUVNkcIXQsvyuybQgbiv0/J//O/QgbG+mazSW7ZxOJnjWRUFEBJOd9mqGdmyiPvo0QUDoK2bfMuWOzJJ4Qpo9y1iQBtQa3cwGphZ+NtikL0L5i9K27zcQHSKwE2EkoDT5N8fD2aLaiwIqn6FzxNWRY7xufBZZLtaKhESPMs7EZYeFYDlJLvoKVTEfalKUNhb5HKB56xaBZQCIsc/ZhJSB/4J7I3qgOILlwLTAb5YWHMFPwZHUY9topcLpOJbX4xmirnwDlK7J7NzFm35Dea3eEA9CQ73uc0pGXI6GiFdjJLjpWfBmnO/TI/SkUwoSDdmdCx4e+iJM+KZJ9ShsKBx81+eDKOHX4l/aMMKqkyL5xD7FZP480q8qHjhVfJTZzVq2EYUqk0UoQm3l9ZDSMbWwy0aEyE+J0hmGgKgsQGisOxaOPUjq6g9gp5zTvXIOwu0j0fH76yQoRvbxc2FB4dzPlkV8jbFMkrZXwem/VEsDr3agJcmZSpROQezu6raCnqFL1VCySfwS67DP61kYIT3z9PFhxYEzKztt9H/gFEA54Az+nPLQnWvLsD0TCgtL72/GGXkJIM+mWK7zeDRrGZBjc1XcKgpzGmgNWwkf7g9NzOz5A0v6gcYdkuNp1VG/VEHntDo3bPWbkH0Ddd8skrOopc5AX3m/XaQD3bx5Bupc9UX3M2Erxjz3aJqSNXyad2iVvEIk/gnvJT2vXXr2tfTFG28lURni9G/F23mXQOO9BCHLY+PmJz6sS44u1okZeY54fd1RRydGGv6c0UWPeLSpjM+Re9gSkTgPArtR6uOc9iPfrsFTitzfjXvXcNqAMKLQ6AyFPjrxMqmIfcAytjWOlfR+tFAKFcGZiJedH7gvVD2If4KF5eNxKGi69RpBQooqE3raP4K76tuDki27FDSO34devo+vsn0WbQAtKgzsYfetvSfZIsAT+iMIfUZRHoPPsX5LMzG++2QrQgWb0zU+ROWO7+S7Fx/vdP9YeKQ9X/5RYcWocw71qO97O72iGe+HYb+D4q5Db9z94Ay9G88ECSMy+hqCwitH9AcVDPuVQCGGvJjH7o5HiDWlD8dDjZPds5/gOOP5bGPpdbdIv/E8jSMj2xFXK6LL3ytdNg3O+K7HTNvkD3yd2ygURJAHp2nSuuI2hXWsJclZoIwGZZV9HOnak6gkdQP7AD5CxmPfSjaUJ90+oapUoj/Fcwl3zaPUBb8c3FML2KQ08Sun9X0dCxXxT9QmkewZae2i/jHQXk+i5PlLtvHQg3/c03uAWZGwcfO7FP8W9+CFzHjmGJx2Ve96PwB8NAyEUqlwit38jsZm/jIZKzCFz+pcY2vkF/FHoXn0jVjwWqVpbB5DdvQF/1MNK4Z77PdOnlQD35No7xiEShbQyAhWPPkZpIBoqBJCY+2nQPUi3i9Tiz0VDw4bCe09TPPIsaLPYRHCVogkS5E2HQV6Rff2uSEunVmDFk6SXfIHM0rXY6e5IYaxWMLrvbmTcIKCieceNp1YIk+GoVIUKAYX+X1E88iLxWRc0XUKVD+klfw/aj2TgJk+1jdLRbTUXJAyemrh+kyMioAZt5YIAlGZ0z6bmowrby1gnMj4j8hlhdu+GCc8GpaYtZcNbyhuTDq0UGNtQOLSZ0uGXImcnI2cND2+jdGTb+H4FUAnAJreVBoLoyWdCK8XIng1T878iCJzdu6l+nyIcy+Tvs+vOqrDAL5oEWl3d1DC6fzOZ058nMfeilssDpQP5g88xunfLpFGpCsyHAPFKbcyJguT21esZygNhjnaSWdCBZvj3G4nP2dyaFJjEw3DvBpQ/Ps44kbwByIX1jRMEGd1Xv5GwjECTZTeEA/m+Jyj2v0Bi7oXTRqWCRv7gUw3rt4Q0AVVuf/1uTMqzDlfQqF+wFtpdiEortmLQ2BgtLSYmrc6T1c+DpsNCQv7A4+Tf295QJRqhUex/nkL/k1ix5jnjBtyaIFqD8jXDOzdMq4xWaxj+/d3V+uIWuPXElbQhf/BJCn1TQ0XaUOx/kfzBze04XG1DBi78VGK4d2q2osHYl9KNq/iiCtKSalVsxYLcu0+SPxgNFYPGSxT6NlfPH1spNRQCe2wA3xoqgSa79y4SPU82R0ND9s27EY5uV5m6zYzzWxNAlSB3AFQBvGNPUTzyLPFZl07qGQsbikdeotj/GJYDWJCabz7la0EgG6erNUF02QzAex+KRyG7507ip146eRMN2T3fRgcKK22SHk6HqXFsoYxETv84YAwLCfHZkF4M5aGtFPu31PfhbCgceZbS4a243Xiv3UF1sahUUUyT7ea7aSNABN7Wj4675F74E4vSwHeJzb5iYgMN+Xfuw0pLb8etAYzJ1lz2qxY0A2yCQkuCTCAroSgd3kqh739JzV9TjdOFBaWBHXjHn0A6E43BmuJh6gRBykMtzUSF3LO+ZVTLTmsK/QFBYQPJeWPO7QXk9m9CeUWsJO4594A/irfzTnN77MeT05lT568ebE0CIfFe/pIR5sybzQcC/ojR3VOu3EayZw1agTe4g4EXzkPIgKAE5WG81+8z7S7495aXYJvU4tYEGUuqDKXBsHBAw8jujSTmrDFo7Ls7/CSbsOCg2sx78QbGntNMh2S1WKAFdq8yn9N5//cAxE4O/+czoHBwC8XDL1Meeot8/y+q3+BKB6xE1T1yL386PIyaPtv4ufYhArWEmp0x6pXbdxdad+GP+iajXjZLrdPluBf9l9eu0vX/B6CLoLSn1zyeAAAAAElFTkSuQmCC" />
        </svg>
            <b>Southall Athletic F.C.</b>
        </p>
    </div>
 </section> --}}
 <meta content="width=device-width, initial-scale=1.0" name="viewport"/>

 <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css"/>
 <style>
    * {
    box-sizing: border-box;
    }
    body {
    margin: 0;
    padding: 0;
    }
    a[x-apple-data-detectors] {
    color: inherit !important;
    text-decoration: inherit !important;
    }
    #MessageViewBody a {
    color: inherit;
    text-decoration: none;
    }
    p {
    line-height: inherit
    }
    .desktop_hide,
    .desktop_hide table {
    mso-hide: all;
    display: none;
    max-height: 0px;
    overflow: hidden;
    }
    @media (max-width:705px) {
    .desktop_hide table.icons-inner {
    display: inline-block !important;
    }
    .icons-inner {
    text-align: center;
    }
    .icons-inner td {
    margin: 0 auto;
    }
    .row-content {
    width: 100% !important;
    }
    .mobile_hide {
    display: none;
    }
    .stack .column {
    width: 100%;
    display: block;
    }
    .mobile_hide {
    min-height: 0;
    max-height: 0;
    max-width: 0;
    overflow: hidden;
    font-size: 0px;
    }
    .desktop_hide,
    .desktop_hide table {
    display: table !important;
    max-height: none !important;
    }
    .row-1 .column-1 .block-1.heading_block td.pad {
    padding: 15px !important;
    }
    .row-1 .column-1 .block-1.heading_block h1 {
    font-size: 20px !important;
    }
    }
 </style>


    <table border="0" cellpadding="0" cellspacing="0" class="nl-container" role="presentation" style="padding-left: 15px; padding-right: 15px; background-color: transparent;" width="100%">
    <tbody>
       <tr>
          <td>

             <!-- <table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-1" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                <tbody>
                   <tr>
                      <td>
                         <table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content stack" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; color: #000000; width: 685px;" width="685">
                            <tbody>
                               <tr>
                                  <td class="column column-1" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 5px; padding-bottom: 5px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="100%">
                                     <table border="0" cellpadding="0" cellspacing="0" class="heading_block block-1" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                                        <tr>
                                           <td class="pad" style="text-align:center;width:100%;">
                                              <h1 style="margin: 0; color: #2d2525; direction: ltr; font-family: 'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 22px; font-weight: 700; letter-spacing: normal; line-height: 120%; text-align: left; margin-top: 0; margin-bottom: 0;">SUBJECT: Thank you for your enquiry<br/></h1>
                                           </td>
                                        </tr>
                                     </table>
                                  </td>
                               </tr>
                            </tbody>
                         </table>
                      </td>
                   </tr>
                </tbody>
             </table> -->

             <table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-2" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                <tbody>
                   <tr>
                      <td>
                         <table align="center" cellpadding="0" cellspacing="0" class="row-content stack" role="presentation" style="border: 1px solid #d4dbe1; border-radius: 4px; margin-top: 15px; color: #000000; width: 685px;" width="685">
                            <tbody>
                               <tr>
                                  <td class="column column-1" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 5px; padding-bottom: 5px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="100%">
                                     <table border="0" cellpadding="10" cellspacing="0" class="text_block block-1" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;" width="100%">
                                        <tr>
                                           <td class="pad">
                                              <div style="font-family: Arial, sans-serif">
                                                 <div class="txtTinyMce-wrapper" style="font-size: 12px; font-family: 'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif; mso-line-height-alt: 21.6px; color: #2d2525; line-height: 1.8;">
                                                    <p style="margin: 0; mso-line-height-alt: 28.8px;"><span style="font-size:16px;">This is an automated email to confirm that we have received your enquiry and we will be contacting you in due course. Please remember to add us to your safe list. So, you do not miss out on any vital communication from us. In the meantime, please feel free to enjoy our successes both on and off the field by having a look through our online presence:</span></p>
                                                 </div>
                                              </div>
                                           </td>
                                        </tr>
                                     </table>

                                     <table border="0" cellpadding="0" cellspacing="0" class="icons_block block-3" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                                        <tr>
                                           <td class="pad" style="vertical-align: middle; color: #000000; font-family: inherit; font-size: 14px; text-align: center; padding-top: 60px;">
                                              <table align="center" cellpadding="0" cellspacing="0" class="alignment" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                                                 <tr>
                                                    <td style="vertical-align: middle; text-align: center; padding-top: 5px; padding-bottom: 5px; padding-left: 10px; padding-right: 10px;"><a title="Facebook"href="https://www.facebook.com/SouthallAthletic/" style="text-decoration: none;" target="_blank"><img align="center" alt="" class="icon" height="32" src="{{ $message->embed('assets/images/mail-icons/fb-i.png') }}" style="display: block; height: auto; margin: 0 auto; border: 0;" width="32"/></a></td>
                                                    <td style="vertical-align: middle; text-align: center; padding-top: 5px; padding-bottom: 5px; padding-left: 10px; padding-right: 10px;"><a title="Instagram"href="https://www.instagram.com/southall_athletic/?hl=en" style="text-decoration: none;" target="_blank"><img align="center" alt="" class="icon" height="32" src="{{ $message->embed('assets/images/mail-icons/insta-i.png') }}" style="display: block; height: auto; margin: 0 auto; border: 0;" width="32"/></a></td>
                                                    <td style="vertical-align: middle; text-align: center; padding-top: 5px; padding-bottom: 5px; padding-left: 10px; padding-right: 10px;"><a title="linkedin"href="https://www.linkedin.com/company/southall-afc/" style="text-decoration: none;" target="_blank"><img align="center" alt="" class="icon" height="32" src="{{ $message->embed('assets/images/mail-icons/linkedin-i.png') }}" style="display: block; height: auto; margin: 0 auto; border: 0;" width="32"/></a></td>
                                                    <td style="vertical-align: middle; text-align: center; padding-top: 5px; padding-bottom: 5px; padding-left: 10px; padding-right: 10px;"><a title="twitter"href="https://twitter.com/southall_afc" style="text-decoration: none;" target="_blank"><img align="center" alt="" class="icon" height="32" src="{{ $message->embed('assets/images/mail-icons/twitter-i.png') }}" style="display: block; height: auto; margin: 0 auto; border: 0;" width="39"/></a></td>
                                                    <td style="vertical-align: middle; text-align: center; padding-top: 5px; padding-bottom: 5px; padding-left: 10px; padding-right: 10px;"><a title="youtube"href="https://www.youtube.com/channel/UC5puOkk0k-yIfngkssGtzWA" style="text-decoration: none;" target="_blank"><img align="center" alt="" class="icon" height="32" src="{{ $message->embed('assets/images/mail-icons/youtube-i.png') }}" style="display: block; height: auto; margin: 0 auto; border: 0;" width="47"/></a></td>
                                                 </tr>
                                              </table>
                                           </td>
                                        </tr>
                                     </table>

                                     <table border="0" cellpadding="0" cellspacing="0" class="html_block block-5" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                                        <tr>
                                           <td class="pad" style="padding-top:40px;">
                                              <div style="font-family:Open Sans, Helvetica Neue, Helvetica, Arial, sans-serif; text-align:left; line-height: 25px; padding-left: 15px; padding-right: 15px;">
                                                 <p>If for any reason you have the need to contact us, then please email us at: <a href="mailto: info@southallathleticfc.com" target="_blank" style="text-decoration: none;">info@southallathleticfc.com</a> <br>
                                                    <br>Regards,
                                                    </br>
                                                 </p>
                                              </div>
                                           </td>
                                        </tr>
                                     </table>

                                     <table border="0" cellpadding="0" cellspacing="0" class="icons_block block-6" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                                        <tr>
                                           <td class="pad" style="vertical-align: middle; color: #000000; font-family: inherit; font-size: 12px; text-align: left;">
                                              <table align="left" cellpadding="0" cellspacing="0" class="alignment" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                                                 <tr>
                                                    <td style="vertical-align: middle; display: flex; align-items: center; text-align: center; padding-top: 5px; padding-bottom: 5px; padding-left: 5px; padding-right: 5px;">
                                                      <img align="center" alt="" class="icon" height="64" src="{{ $message->embed('assets/images/mail-icons/image051.png') }}" style="display: block; height: auto; margin: 0 auto; border: 0;" width="64"/>
                                                      <b style="font-family:Open Sans, Helvetica Neue, Helvetica, Arial, sans-serif; font-size: 16px;">Southall Athletic F.C.</b>
                                                  </td>
                                                 </tr>
                                              </table>
                                           </td>
                                        </tr>
                                     </table>

                                  </td>
                               </tr>
                            </tbody>
                         </table>
                      </td>
                   </tr>
                </tbody>
             </table>
             
             <!-- End -->