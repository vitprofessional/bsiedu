@extends('frontside.include')
@section('backtitle') Home @endsection
@section('backcontent')
<style>
    .contentSection{
        width:100%;
        height:auto;
        position:relative;
    }
    svg{
        width:100%;
        height:auto;
    }
    .detailscontent{
        width:100%;
        height: auto;
        top:0;
        position:absolute;
    }
    .detailsHeding{
        text-align:center;
        font-size:22px;
        margin-top:100px;
        color:#a6a6a6;
        font-weight:bold;
        font-family:Raleway;
    }
    .detailsdescription{
        width:500px;
        margin:auto;
        text-align:center;
        font-size:15px;
        margin-top:10px;
        color:#a6a6a6;
        font-weight:normal;
        font-family:Raleway;
    } 
    }
</style>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12" >
                                        <a class="course-overlay" href="#">
                                            <img src="{{$Datakey->image1}}" style="height:350px;" alt="">
                                            <span>{{$Datakey->title}}</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <div class="container">                            
                            <div class="contentSection">
                                <svg id="wave" style="transform:rotate(0deg); transition: 0.3s" viewBox="0 0 1440 490" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(243, 106, 62, .5)" offset="0%"></stop><stop stop-color="rgba(255, 179, 11, .5)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)" d="M0,343L48,326.7C96,310,192,278,288,294C384,310,480,376,576,375.7C672,376,768,310,864,236.8C960,163,1056,82,1152,49C1248,16,1344,33,1440,32.7C1536,33,1632,16,1728,8.2C1824,0,1920,0,2016,57.2C2112,114,2208,229,2304,285.8C2400,343,2496,343,2592,334.8C2688,327,2784,310,2880,261.3C2976,212,3072,131,3168,98C3264,65,3360,82,3456,114.3C3552,147,3648,196,3744,245C3840,294,3936,343,4032,310.3C4128,278,4224,163,4320,147C4416,131,4512,212,4608,220.5C4704,229,4800,163,4896,130.7C4992,98,5088,98,5184,106.2C5280,114,5376,131,5472,114.3C5568,98,5664,49,5760,73.5C5856,98,5952,196,6048,236.8C6144,278,6240,261,6336,285.8C6432,310,6528,376,6624,359.3C6720,343,6816,245,6864,196L6912,147L6912,490L6864,490C6816,490,6720,490,6624,490C6528,490,6432,490,6336,490C6240,490,6144,490,6048,490C5952,490,5856,490,5760,490C5664,490,5568,490,5472,490C5376,490,5280,490,5184,490C5088,490,4992,490,4896,490C4800,490,4704,490,4608,490C4512,490,4416,490,4320,490C4224,490,4128,490,4032,490C3936,490,3840,490,3744,490C3648,490,3552,490,3456,490C3360,490,3264,490,3168,490C3072,490,2976,490,2880,490C2784,490,2688,490,2592,490C2496,490,2400,490,2304,490C2208,490,2112,490,2016,490C1920,490,1824,490,1728,490C1632,490,1536,490,1440,490C1344,490,1248,490,1152,490C1056,490,960,490,864,490C768,490,672,490,576,490C480,490,384,490,288,490C192,490,96,490,48,490L0,490Z"></path><defs><linearGradient id="sw-gradient-1" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(243, 106, 62, 1)" offset="0%"></stop><stop stop-color="rgba(255, 179, 11, .5)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 50px); opacity:0.5" fill="url(#sw-gradient-1)" d="M0,196L48,228.7C96,261,192,327,288,302.2C384,278,480,163,576,171.5C672,180,768,310,864,310.3C960,310,1056,180,1152,106.2C1248,33,1344,16,1440,8.2C1536,0,1632,0,1728,32.7C1824,65,1920,131,2016,163.3C2112,196,2208,196,2304,204.2C2400,212,2496,229,2592,204.2C2688,180,2784,114,2880,114.3C2976,114,3072,180,3168,220.5C3264,261,3360,278,3456,261.3C3552,245,3648,196,3744,171.5C3840,147,3936,147,4032,147C4128,147,4224,147,4320,163.3C4416,180,4512,212,4608,228.7C4704,245,4800,245,4896,228.7C4992,212,5088,180,5184,155.2C5280,131,5376,114,5472,138.8C5568,163,5664,229,5760,245C5856,261,5952,229,6048,228.7C6144,229,6240,261,6336,285.8C6432,310,6528,327,6624,351.2C6720,376,6816,408,6864,424.7L6912,441L6912,490L6864,490C6816,490,6720,490,6624,490C6528,490,6432,490,6336,490C6240,490,6144,490,6048,490C5952,490,5856,490,5760,490C5664,490,5568,490,5472,490C5376,490,5280,490,5184,490C5088,490,4992,490,4896,490C4800,490,4704,490,4608,490C4512,490,4416,490,4320,490C4224,490,4128,490,4032,490C3936,490,3840,490,3744,490C3648,490,3552,490,3456,490C3360,490,3264,490,3168,490C3072,490,2976,490,2880,490C2784,490,2688,490,2592,490C2496,490,2400,490,2304,490C2208,490,2112,490,2016,490C1920,490,1824,490,1728,490C1632,490,1536,490,1440,490C1344,490,1248,490,1152,490C1056,490,960,490,864,490C768,490,672,490,576,490C480,490,384,490,288,490C192,490,96,490,48,490L0,490Z"></path></svg>
                                <div class="detailscontent">
                                        <div class="row">
                                            <div class="col-md-12">
                                        <div class="detailsHeding" > Lab Facility </div>
                                        <p class="detailsdescription">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean at pulvinar sapien.
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean at pulvinar sapien.
                                        
                                        </p>
                                        <li> AC Room </li>
                                        <li> Multi Media calss </li>
                                        <li> Experience Teachers </li>
                                        <li> Electicity</li>
                                        <li> Modern leb</li>
                                        <li> Digital Deveice</li>
                                        <li> 100% fulfile device </li>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>   


@endsection