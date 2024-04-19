import { ComponentFixture, TestBed } from '@angular/core/testing';

import { TestephpComponent } from './testephp.component';

describe('TestephpComponent', () => {
  let component: TestephpComponent;
  let fixture: ComponentFixture<TestephpComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [TestephpComponent]
    })
    .compileComponents();
    
    fixture = TestBed.createComponent(TestephpComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
