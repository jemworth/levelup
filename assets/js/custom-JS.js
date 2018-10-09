(function($){
	'use strict';
	// var customeJs = {
	// 	init: function(){
	// 		this.addNewLead();
	// 	}
	// }

	// $(document).ready(function(){
	// 	customeJs.init
	// });
	
	var customeJs = {
		init: function(){
			this.pipelinePopup();
			this.sortRowColumn();
			this.quickAddPipeline();
			this.popupDefault();
			this.settingPipeline();
		},
		popupDefault : function(){
			function leftSpace(){
				var sidebar = $('.site-sidebar').width();
				$('.popup_overlay, .popup__inner__view').css('left', sidebar);
			}
			leftSpace();
			$('.sidebar-toggle').click(function(){
				leftSpace();
			});

			$('.popup__inner__view').click(function(e){
				e.stopPropagation();
			});

			$('.popup_overlay').click(function(){
				$(this).removeClass('active-view');
			});
		},
		pipelinePopup : function(){
			var el = $('.page-title h5'),
				setting = $('.block-setting');

			$(el).click(function(){
				$('.pipeline-lead-popup').addClass('active-view');
			});
			$(setting).click(function(e){
				e.preventDefault();
				$('.pipeline-setting-popup').addClass('active-view');
			});

			// el.click(function(){
			// 	var sidebar = $('.site-sidebar').width();
			// 	//alert(sidebar);
			// 	$('.pipeline-lead-popup, .pipeline-lead-list').css('left', sidebar);
			// });
			
			/*$('.aside__footer--add').click(function(){
				$('.aside__footer-inner').toggle();
			});

			/*$('.check__list').click(function(){
				$('.aside__footer-inner').toggle();
				var inputval = $(this).parent().siblings().val();
				var list = $('.aside__list-item').eq(-1);
				list.before(`<li class="aside__list-item"><a href="#" class="aside__list-item-link">${inputval}</a></li>`)
				// console.log(list);
				$(this).parent().siblings().val('');
			});*/
		},

		sortRowColumn : function(){
			var el_pc = $('.pipeline-cells'),
				el_pl = $('.pipeline-table'),
				el_rs = $('.row-sort'),
				el_cs = $('.column-sort');
			
			el_rs.click(function(){
				el_pl.show();
				el_pc.hide();
				$(this).addClass('sort-active');
				el_cs.removeClass('sort-active');
			});
			el_cs.click(function(){
				el_pl.hide();
				el_pc.show();
				$(this).addClass('sort-active');
				el_rs.removeClass('sort-active');
			});
			
			
		},

		quickAddPipeline : function(){
			var quickTitle = $('.quick_add__text'),
				quickCancel = $('.btn-quick-cancel'),
				quickAdd = $('.btn-quick-add');

			quickTitle.click(function(){
				$(this)
					.parent()
						.addClass('popup__view')
					.end()
						.siblings().show()
					.end()
						.hide();
			});

			quickCancel.click(function(){
				$(quickTitle).show();
				$('.quick-add-pipeline').removeClass('popup__view');
				$(this).parent().hide();
				$(this).parent().children().find('.form-control').val('');
			});

			quickAdd.click(function(){
				var qlname = $('[name="qlname"]').val(),
					qbamount = $('[name="qbamount"]').val(),
					qccompany = $('[name="qccompany"]').val();
				
				var date = new Date(),
					day = date.getDay(),
					month = date.getMonth(),
					year = date.getFullYear(),

					year = year.toString();
					year = year.slice(-2);

					if(day < 10){
						day = '0'+day;
					}
					if(month < 10){
						month = '0'+month;
					}

				var fullDate = day +'/'+ month +'/'+ year;

				var tableListLen = $('.table-lead-list').find('tr').length;

				var quickCellHTML = `<li class="pipeline-body-cell dd-item">
									<div class="dd-handle">
										<div class="pipeline-top-block">
											<div class="pipeline-top-name">${qlname}</div>
											<!-- /.pipeline-top-name -->
											<div class="pipeline-top-date">${fullDate}</div>
											<!-- /.pipeline-top-date -->
										</div>
										<!-- /.pipeline-top-block -->
										<div class="pipeline-title-block">${qccompany}</div>
										<!-- /.pipeline-title-block -->
										<div class="pipeline-bottom-block">
											<div class="pipeline-bottom-price">$${qbamount}</div>
											<!-- /.pipeline-bottom-price -->
										</div>
										<!-- /.pipeline-bottom-block -->
									</div>
									<!-- /.dd-headle -->
								</li>`;
					
					var quickListHTML = `<tr>
											<td><label for="checklist${tableListLen+1}"><input type="checkbox" id="checklist${tableListLen+1}" name=""><var></var></label></td>
											<td><div contenteditable="true">${qlname}</div></td>
											<td><div contenteditable="true">${qccompany}</div></td>
											<td><span class="leads__status-label" style="background-color: #ffcc66;">Deal On</span></td>
											<td>$${qbamount}</td>
											<td>Raymond Ruiz</td>
											<td>3d</td>
										</tr>`;
				
				$(this).parents('.pipeline-cell').find('.dd ol.dd-list').prepend(quickCellHTML);
				$('.table-lead-list').find('tbody').prepend(quickListHTML);
			});
		},

		settingPipeline : function(){
			//var btnPlEdit = $('.btn-pl-edit');
			//var SIHeading = $('.setting__inner_heading'),
				//SIHeadingInner = SIHeading.html();
			// Edit pipeline setting title
			/*$('.setting__inner_heading').on('click', '.btn-pl-edit',  function(){
				var	SIHeadingTit = $('.si__heading_text').text();
				//<div class="si__heading_text h-text-overflow">Main Pipeline</div>
				var SIHeadingField = `
					<form name="updateColName">
					<input type="text" class="si__heading_text-input h-text-overflow" value="${SIHeadingTit}" />
					<div class="si__heading_events d-flex ml-2">
					<a href="javascript:void(0);" ng-click="test()" class="btn-pl-title-done"><i class="material-icons">check</i></a>
					<a href="javascript:void(0);" class="btn-pl-title-delete text-danger"><i class="material-icons">delete</i></a>
					</div></form>`;
				SIHeading.html(SIHeadingField);
			});*/
			
			// add new pipeline title
			/*$('.setting__inner_heading').on('click', '.btn-pl-title-done', function(){
				var SIHTInput =  $('.si__heading_text-input').val();
				SIHeading.html(SIHeadingInner);
				setTimeout(function(){
					$('.si__heading_text').text(SIHTInput);
				}, 50)
			});*/

			var confirmationPopup = `<div class="conformation-popup">
									<a href="javascript:void(0);" class="close-confirmation"><i class="material-icons list-icon">close</i></a>
									<p>You can not delete pipeline while it has leads. Please, go to leads page and change statuses of open and closed leads of this pipeline to the statuses of another pipelines.</p>
									<button class="btn btn-info btn-sm conform-ok">OK</button>
								</div>
								<div class="conformation-overlay"></div>`;
			var deletePopup = `<p>Are you sure you want to delete this pipeline? you can always recreate it later if you need to.</p>
							   <button class="btn btn-danger btn-sm conform-delete">Delete</button>`;

			// delete first confirmation popup
			$('.setting__inner_heading').on('click', '.btn-pl-title-delete', function(){
				$(confirmationPopup).appendTo('.popup__inner__view');
			});

			// remove confrimation popups 
			$('.popup__inner__view').on('click','.close-confirmation, .conform-delete', function(){
				$('.conformation-popup, .conformation-overlay').remove();
				$('.btn-pl-title-done').click();
			});

			// delete pipeline and confirmation popups
			$('.popup__inner__view').on('click','.conform-ok', function(){
				$('.conformation-popup p, .conformation-popup button').remove();
				$('.conformation-popup').append(deletePopup);
			});

			// edit pipe list cell
			/*$('body').on('click', '.pipe-si-edit', function(){
				$(this).parents('.list-group').removeClass('sortable');
				var thisPtitle = $('.pills-title').text();
				var pipelineInput = `<div class="pills-input">
										<div class="form-group">
											<input type="text" class="form-control pipeline-input-text" value="${thisPtitle}" />
										</div>
										<button class="btn btn-sm btn-save-pipeline">Save</button>
										<button class="btn btn-link btn-cancel-pipeline">Cancel</button>
									</div>`;
				$(this).parents('.list-group-item').append(pipelineInput);
			});*/

			// add new pipeline in to of list
			/*$('.btn-pl-add').click(function(){
				var PipelineCell = `<li class="list-group-item bg-gray text-inverse">
										<div class="d-flex align-content-center">
											<div class="mr-auto pills-title">Add New Pipeline</div>
											<div> <a href="javascript:void(0);"><i class="material-icons pipe-si-edit list-icon">edit</i></a>  <a href="javascript:void(0);"><i class="material-icons list-icon  pipe-si-delete text-danger">delete</i></a>
											</div>
										</div>
									</li>`;
				$('.setting__inner_pills .list-group').prepend(PipelineCell);
			});*/
		}
	};


customeJs.init();

$(".flat").spectrum();


})(jQuery)