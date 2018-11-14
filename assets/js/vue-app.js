const app = new Vue({
  el:'#poptin-app',
  data:{
    lists:[],
    currentSort:'title',
    currentSortDir:'asc',
    pageSize:5,
    currentPage:1,
    ListFilter:''
  },
  created:function() {
    fetch('http://poptin.s165.upress.link/app/json/poptin.json')
    .then(res => res.json())
    .then(res => {
      this.lists = res;
    })
  },
  methods:{
    sort:function(s) {
      //if s == current sort, reverse
      if(s === this.currentSort) {
        this.currentSortDir = this.currentSortDir==='asc'?'desc':'asc';
      }
      this.currentSort = s;
    },
    nextPage:function() {
      if((this.currentPage*this.pageSize) < this.lists.length) this.currentPage++;
    },
    prevPage:function() {
      if(this.currentPage > 1) this.currentPage--;
    }

  },
  computed:{
    sortedLists:function() {
      let filter = this.ListFilter.toLowerCase();
      let myLists = this.lists.filter((row,index) => {
        if(this.ListFilter === '' || this.lists[index].title.toLowerCase().indexOf(filter) >= 0) return true;
        return false;
      });
      
      return myLists.sort((a,b) => {
        let modifier = 1;
        if(this.currentSortDir === 'desc') modifier = -1;
        if(a[this.currentSort] < b[this.currentSort]) return -1 * modifier;
        if(a[this.currentSort] > b[this.currentSort]) return 1 * modifier;
        return 0;
      }).filter((row, index) => {
        let start = (this.currentPage-1)*this.pageSize;
        let end = this.currentPage*this.pageSize;
        if(index >= start && index < end) return true;
      });
    }
  }
})