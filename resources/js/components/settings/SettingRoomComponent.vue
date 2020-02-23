<template>
    <div>
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-rocket icon-gradient bg-mean-fruit">
                            
                        </i>
                    </div>
                    <div>Rooms
                        <div class="page-title-subheading">
                            <nav class="" aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a>
                                            <i aria-hidden="true" class="fa fa-home"></i>
                                        </a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a>ตั้งค่าห้องพัก</a>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="page-title-actions">
                    <button type="button" data-toggle="tooltip" title="Example Tooltip" data-placement="bottom" class="btn-shadow mr-3 btn btn-dark">
                        <i class="fa fa-star"></i>
                    </button>
                    <div class="d-inline-block dropdown">
                        
                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a href="javascript:void(0);" class="nav-link">
                                        <i class="nav-link-icon lnr-inbox"></i>
                                        <span>
                                            Inbox
                                        </span>
                                        <div class="ml-auto badge badge-pill badge-secondary">86</div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="javascript:void(0);" class="nav-link">
                                        <i class="nav-link-icon lnr-book"></i>
                                        <span>
                                            Book
                                        </span>
                                        <div class="ml-auto badge badge-pill badge-danger">5</div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="javascript:void(0);" class="nav-link">
                                        <i class="nav-link-icon lnr-picture"></i>
                                        <span>
                                            Picture
                                        </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a disabled href="javascript:void(0);" class="nav-link disabled">
                                        <i class="nav-link-icon lnr-file-empty"></i>
                                        <span>
                                            File Disabled
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>    
            </div>
        </div>  
        <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <div class="card-header">ห้องพัก
                    <div class="btn-actions-pane-right">
                        <div role="group" class="btn-group-sm btn-group">
                        <a href="" class="active btn btn-primary">เพิ่มห้องพัก</a>
                        </div>
                    </div>
                </div> 
                <div class="table-responsive">
                    <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                        
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th class="text-center">ชื่อห้อง</th>
                                <th class="text-center">สถานะ</th>
                                <th class="text-center">Active</th>
                                <th class="text-center">ค่าห้อง</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                                        
                            <tr v-for="(room, index) in rooms" :key="room.room_id">
                                <td class="text-center text-muted">{{ index + 1 }}</td>
                                <td>
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                            
                                            <div class="widget-content-left flex2">
                                                {{room.name}}
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-center">
                                    
                                   <div class="badge badge-warning">
                                    {{room.status}}
                                    </div>
                                   
                                
                                </td>
                                <td class="text-center text-muted">
                                    <input type="checkbox" name="active" id="active">
                                </td>
                                <td class="text-center text-muted">{{ room.rate }}</td>
                                <td class="text-center">
                                    <a href="" class="btn btn-sm btn-warning">
                                        <i class="pe-7s-pen"></i>
                                    </a>
                                    {{ room.room_id}}
                                    <a href="" class="btn btn-sm btn-danger">
                                        <i class="pe-7s-trash"></i>
                                    </a>
                                </td>
                            </tr>
                           
                        </tbody>
                     
                    </table>
                </div>
                
            </div>
        </div>
    </div>
    </div>
</template>

<script>
export default {
    mounted(){
        this.getSettingRoom();
    },
    methods:{
        getSettingRoom(){
            axios.get('http://localhost:8000/api/rooms/settings').then(response=>{
                this.rooms = response.data;
            });
        }
    },
    data(){
        return{
        rooms:[],
            room:{
                room_id:0,
                name:'',
                status:0,
                rate:0
            }
        }
    }
}
</script>