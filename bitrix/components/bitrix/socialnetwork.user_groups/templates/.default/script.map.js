{"version":3,"file":"script.min.js","sources":["script.js"],"names":["BitrixSUG","prototype","sendRequest","params","groupId","parseInt","action","BX","util","in_array","requestParams","value","ajax","url","method","dataType","data","sessid","bitrix_sessid","site","message","onsuccess","responseData","SUCCESS","callback_success","callback_failure","ERROR","onfailure","showRequestWait","target","addClass","closeRequestWait","removeClass","setFavorites","node","active","flyingStar","cloneNode","style","marginLeft","offsetWidth","parentNode","appendChild","easing","duration","start","opacity","scale","finish","transition","transitions","linear","step","state","transform","complete","removeChild","animate","adjust","attrs","title","setRequestSent","sentNode","role","this","showRequestSent","showError","errorText","errorPopup","PopupWindow","Math","random","window","autoHide","lightShadow","zIndex","content","create","props","className","html","replace","closeByEsc","closeIcon","show","showSortMenu","PopupMenu","destroy","bindNode","text","onclick","proxy","selectSortMenuItem","key","valueNode","userId","showMembersCountItem","offsetLeft","offsetTop","angle","position","offset","innerHTML","document","location","href","oSUG"],"mappings":"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"}