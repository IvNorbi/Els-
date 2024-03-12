import { ComponentFixture, TestBed } from '@angular/core/testing';

import { AddmoviedialogComponent } from './addmoviedialog.component';

describe('AddmoviedialogComponent', () => {
  let component: AddmoviedialogComponent;
  let fixture: ComponentFixture<AddmoviedialogComponent>;

  beforeEach(() => {
    TestBed.configureTestingModule({
      declarations: [AddmoviedialogComponent]
    });
    fixture = TestBed.createComponent(AddmoviedialogComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
